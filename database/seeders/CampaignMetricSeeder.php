<?php

namespace Database\Seeders;

use App\Models\CampaignMetric;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CampaignMetricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $metrics = [];
        $campaignIds = [1, 2, 3, 4, 5];
        $geoLocationIds = [1, 2, 3, 4, 5, 6, 7, 8];
        $deviceIds = [1, 2, 3, 4, 5, 6, 7, 8];

        // Generate daily metrics for the last 30 days
        for ($day = 0; $day < 30; $day++) {
            $date = Carbon::now()->subDays($day);
            
            foreach ($campaignIds as $campaignId) {
                // Generate daily aggregated metrics
                $impressions = rand(1000, 10000);
                $clicks = rand(50, 500);
                $conversions = rand(5, 50);
                $installs = rand(10, 100);
                $registrations = rand(3, 30);
                $sales = rand(1, 20);
                
                $revenue = $sales * rand(20, 100) + (rand(0, 99) / 100);
                $cost = $clicks * rand(0.5, 2.0) + (rand(0, 99) / 100);
                $profit = $revenue - $cost;
                
                // Calculate rates
                $ctr = $impressions > 0 ? ($clicks / $impressions) : 0;
                $conversionRate = $clicks > 0 ? ($conversions / $clicks) : 0;
                $cpc = $clicks > 0 ? ($cost / $clicks) : 0;
                $cpa = $conversions > 0 ? ($cost / $conversions) : 0;
                $roi = $cost > 0 ? (($revenue - $cost) / $cost) : 0;
                $roas = $cost > 0 ? ($revenue / $cost) : 0;

                $metrics[] = [
                    'campaign_id' => $campaignId,
                    'geo_location_id' => null, // Daily aggregate
                    'device_id' => null, // Daily aggregate
                    'date' => $date->format('Y-m-d'),
                    'hour' => null, // Daily aggregate
                    'impressions' => $impressions,
                    'clicks' => $clicks,
                    'conversions' => $conversions,
                    'installs' => $installs,
                    'registrations' => $registrations,
                    'sales' => $sales,
                    'revenue' => $revenue,
                    'cost' => $cost,
                    'profit' => $profit,
                    'ctr' => $ctr,
                    'conversion_rate' => $conversionRate,
                    'cpc' => $cpc,
                    'cpa' => $cpa,
                    'roi' => $roi,
                    'roas' => $roas,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Generate hourly metrics for the last 7 days (sample)
                if ($day < 7) {
                    for ($hour = 0; $hour < 24; $hour++) {
                        $hourlyImpressions = rand(50, 500);
                        $hourlyClicks = rand(5, 50);
                        $hourlyConversions = rand(1, 10);
                        $hourlyInstalls = rand(2, 20);
                        $hourlyRegistrations = rand(1, 5);
                        $hourlySales = rand(0, 5);
                        
                        $hourlyRevenue = $hourlySales * rand(20, 100) + (rand(0, 99) / 100);
                        $hourlyCost = $hourlyClicks * rand(0.5, 2.0) + (rand(0, 99) / 100);
                        $hourlyProfit = $hourlyRevenue - $hourlyCost;
                        
                        // Calculate rates
                        $hourlyCtr = $hourlyImpressions > 0 ? ($hourlyClicks / $hourlyImpressions) : 0;
                        $hourlyConversionRate = $hourlyClicks > 0 ? ($hourlyConversions / $hourlyClicks) : 0;
                        $hourlyCpc = $hourlyClicks > 0 ? ($hourlyCost / $hourlyClicks) : 0;
                        $hourlyCpa = $hourlyConversions > 0 ? ($hourlyCost / $hourlyConversions) : 0;
                        $hourlyRoi = $hourlyCost > 0 ? (($hourlyRevenue - $hourlyCost) / $hourlyCost) : 0;
                        $hourlyRoas = $hourlyCost > 0 ? ($hourlyRevenue / $hourlyCost) : 0;

                        $metrics[] = [
                            'campaign_id' => $campaignId,
                            'geo_location_id' => null, // Hourly aggregate
                            'device_id' => null, // Hourly aggregate
                            'date' => $date->format('Y-m-d'),
                            'hour' => $hour,
                            'impressions' => $hourlyImpressions,
                            'clicks' => $hourlyClicks,
                            'conversions' => $hourlyConversions,
                            'installs' => $hourlyInstalls,
                            'registrations' => $hourlyRegistrations,
                            'sales' => $hourlySales,
                            'revenue' => $hourlyRevenue,
                            'cost' => $hourlyCost,
                            'profit' => $hourlyProfit,
                            'ctr' => $hourlyCtr,
                            'conversion_rate' => $hourlyConversionRate,
                            'cpc' => $hourlyCpc,
                            'cpa' => $hourlyCpa,
                            'roi' => $hourlyRoi,
                            'roas' => $hourlyRoas,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }

                // Generate geo-location specific metrics (sample for last 7 days)
                if ($day < 7) {
                    foreach (array_slice($geoLocationIds, 0, 3) as $geoLocationId) {
                        $geoImpressions = rand(100, 1000);
                        $geoClicks = rand(10, 100);
                        $geoConversions = rand(1, 20);
                        $geoInstalls = rand(2, 40);
                        $geoRegistrations = rand(1, 10);
                        $geoSales = rand(0, 8);
                        
                        $geoRevenue = $geoSales * rand(20, 100) + (rand(0, 99) / 100);
                        $geoCost = $geoClicks * rand(0.5, 2.0) + (rand(0, 99) / 100);
                        $geoProfit = $geoRevenue - $geoCost;
                        
                        // Calculate rates
                        $geoCtr = $geoImpressions > 0 ? ($geoClicks / $geoImpressions) : 0;
                        $geoConversionRate = $geoClicks > 0 ? ($geoConversions / $geoClicks) : 0;
                        $geoCpc = $geoClicks > 0 ? ($geoCost / $geoClicks) : 0;
                        $geoCpa = $geoConversions > 0 ? ($geoCost / $geoConversions) : 0;
                        $geoRoi = $geoCost > 0 ? (($geoRevenue - $geoCost) / $geoCost) : 0;
                        $geoRoas = $geoCost > 0 ? ($geoRevenue / $geoCost) : 0;

                        $metrics[] = [
                            'campaign_id' => $campaignId,
                            'geo_location_id' => $geoLocationId,
                            'device_id' => null, // Geo aggregate
                            'date' => $date->format('Y-m-d'),
                            'hour' => null, // Daily geo aggregate
                            'impressions' => $geoImpressions,
                            'clicks' => $geoClicks,
                            'conversions' => $geoConversions,
                            'installs' => $geoInstalls,
                            'registrations' => $geoRegistrations,
                            'sales' => $geoSales,
                            'revenue' => $geoRevenue,
                            'cost' => $geoCost,
                            'profit' => $geoProfit,
                            'ctr' => $geoCtr,
                            'conversion_rate' => $geoConversionRate,
                            'cpc' => $geoCpc,
                            'cpa' => $geoCpa,
                            'roi' => $geoRoi,
                            'roas' => $geoRoas,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }

                // Generate device specific metrics (sample for last 7 days)
                if ($day < 7) {
                    foreach (array_slice($deviceIds, 0, 3) as $deviceId) {
                        $deviceImpressions = rand(200, 2000);
                        $deviceClicks = rand(20, 200);
                        $deviceConversions = rand(2, 40);
                        $deviceInstalls = rand(5, 80);
                        $deviceRegistrations = rand(2, 20);
                        $deviceSales = rand(0, 15);
                        
                        $deviceRevenue = $deviceSales * rand(20, 100) + (rand(0, 99) / 100);
                        $deviceCost = $deviceClicks * rand(0.5, 2.0) + (rand(0, 99) / 100);
                        $deviceProfit = $deviceRevenue - $deviceCost;
                        
                        // Calculate rates
                        $deviceCtr = $deviceImpressions > 0 ? ($deviceClicks / $deviceImpressions) : 0;
                        $deviceConversionRate = $deviceClicks > 0 ? ($deviceConversions / $deviceClicks) : 0;
                        $deviceCpc = $deviceClicks > 0 ? ($deviceCost / $deviceClicks) : 0;
                        $deviceCpa = $deviceConversions > 0 ? ($deviceCost / $deviceConversions) : 0;
                        $deviceRoi = $deviceCost > 0 ? (($deviceRevenue - $deviceCost) / $deviceCost) : 0;
                        $deviceRoas = $deviceCost > 0 ? ($deviceRevenue / $deviceCost) : 0;

                        $metrics[] = [
                            'campaign_id' => $campaignId,
                            'geo_location_id' => null, // Device aggregate
                            'device_id' => $deviceId,
                            'date' => $date->format('Y-m-d'),
                            'hour' => null, // Daily device aggregate
                            'impressions' => $deviceImpressions,
                            'clicks' => $deviceClicks,
                            'conversions' => $deviceConversions,
                            'installs' => $deviceInstalls,
                            'registrations' => $deviceRegistrations,
                            'sales' => $deviceSales,
                            'revenue' => $deviceRevenue,
                            'cost' => $deviceCost,
                            'profit' => $deviceProfit,
                            'ctr' => $deviceCtr,
                            'conversion_rate' => $deviceConversionRate,
                            'cpc' => $deviceCpc,
                            'cpa' => $deviceCpa,
                            'roi' => $deviceRoi,
                            'roas' => $deviceRoas,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
            }
        }

        // Insert metrics in batches
        $chunks = array_chunk($metrics, 100);
        foreach ($chunks as $chunk) {
            CampaignMetric::insert($chunk);
        }
    }
}
