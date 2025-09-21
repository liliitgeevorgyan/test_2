<?php

namespace Database\Seeders;

use App\Models\CampaignEvent;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CampaignEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [];
        $eventTypes = ['impression', 'click', 'conversion', 'install', 'registration', 'sale'];
        $campaignIds = [1, 2, 3, 4, 5];
        $geoLocationIds = [1, 2, 3, 4, 5, 6, 7, 8];
        $deviceIds = [1, 2, 3, 4, 5, 6, 7, 8];

        // Generate 1000 sample events
        for ($i = 1; $i <= 1000; $i++) {
            $campaignId = $campaignIds[array_rand($campaignIds)];
            $eventType = $eventTypes[array_rand($eventTypes)];
            $geoLocationId = $geoLocationIds[array_rand($geoLocationIds)];
            $deviceId = $deviceIds[array_rand($deviceIds)];
            
            // Generate random event time within the last 30 days
            $eventTime = Carbon::now()->subDays(rand(0, 30))->subHours(rand(0, 23))->subMinutes(rand(0, 59));
            
            // Calculate revenue and cost based on event type
            $revenue = 0;
            $cost = 0;
            
            switch ($eventType) {
                case 'conversion':
                case 'sale':
                    $revenue = rand(10, 100) + (rand(0, 99) / 100);
                    $cost = rand(5, 50) + (rand(0, 99) / 100);
                    break;
                case 'install':
                    $revenue = rand(1, 5) + (rand(0, 99) / 100);
                    $cost = rand(0, 2) + (rand(0, 99) / 100);
                    break;
                case 'click':
                    $cost = rand(0, 2) + (rand(0, 99) / 100);
                    break;
                case 'impression':
                    $cost = rand(0, 1) + (rand(0, 99) / 100);
                    break;
            }

            $events[] = [
                'campaign_id' => $campaignId,
                'event_type' => $eventType,
                'event_id' => 'EVT-' . str_pad($i, 8, '0', STR_PAD_LEFT),
                'user_id' => 'USER-' . str_pad(rand(1, 500), 6, '0', STR_PAD_LEFT),
                'session_id' => 'SESS-' . str_pad(rand(1, 1000), 8, '0', STR_PAD_LEFT),
                'ip_address' => $this->generateRandomIP(),
                'user_agent' => $this->generateRandomUserAgent(),
                'referrer' => $this->generateRandomReferrer(),
                'landing_page' => 'https://example.com/landing?campaign=' . $campaignId,
                'geo_location_id' => $geoLocationId,
                'device_id' => $deviceId,
                'revenue' => $revenue,
                'cost' => $cost,
                'custom_data' => [
                    'source' => 'organic',
                    'medium' => 'cpc',
                    'campaign_name' => 'Sample Campaign ' . $campaignId,
                    'ad_group' => 'Ad Group ' . rand(1, 5),
                    'keyword' => 'sample keyword ' . rand(1, 10),
                ],
                'event_time' => $eventTime,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert events in batches
        $chunks = array_chunk($events, 100);
        foreach ($chunks as $chunk) {
            CampaignEvent::insert($chunk);
        }
    }

    private function generateRandomIP()
    {
        return rand(1, 255) . '.' . rand(1, 255) . '.' . rand(1, 255) . '.' . rand(1, 255);
    }

    private function generateRandomUserAgent()
    {
        $userAgents = [
            'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
            'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
            'Mozilla/5.0 (iPhone; CPU iPhone OS 17_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1',
            'Mozilla/5.0 (Android 14; Mobile; rv:121.0) Gecko/121.0 Firefox/121.0',
            'Mozilla/5.0 (iPad; CPU OS 17_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.2 Mobile/15E148 Safari/604.1',
        ];
        
        return $userAgents[array_rand($userAgents)];
    }

    private function generateRandomReferrer()
    {
        $referrers = [
            'https://google.com/search?q=sample+query',
            'https://facebook.com',
            'https://twitter.com',
            'https://linkedin.com',
            'https://reddit.com',
            'https://youtube.com',
            'https://instagram.com',
            null, // Direct traffic
        ];
        
        return $referrers[array_rand($referrers)];
    }
}
