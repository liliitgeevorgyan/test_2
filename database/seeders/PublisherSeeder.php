<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'name' => 'Digital Media Network',
                'email' => 'partnerships@digitalmedianetwork.com',
                'contact_person' => 'Alex Thompson',
                'phone' => '+1-555-0789',
                'company' => 'Digital Media Network LLC',
                'address' => '987 Digital Drive, New York, NY 10001',
                'country' => 'United States',
                'currency' => 'USD',
                'balance' => 15000.00,
                'status' => 'active',
                'traffic_sources' => ['google', 'facebook', 'twitter', 'linkedin'],
                'settings' => [
                    'payment_frequency' => 'weekly',
                    'minimum_payout' => 100,
                    'auto_approve_campaigns' => true,
                ],
            ],
            [
                'name' => 'Content Creators Hub',
                'email' => 'business@contentcreatorshub.com',
                'contact_person' => 'Maria Garcia',
                'phone' => '+34-91-123-4567',
                'company' => 'Content Creators Hub SL',
                'address' => '456 Content Street, Madrid, Spain',
                'country' => 'Spain',
                'currency' => 'EUR',
                'balance' => 22000.00,
                'status' => 'active',
                'traffic_sources' => ['instagram', 'tiktok', 'youtube', 'pinterest'],
                'settings' => [
                    'payment_frequency' => 'bi-weekly',
                    'minimum_payout' => 200,
                    'auto_approve_campaigns' => false,
                ],
            ],
            [
                'name' => 'Tech Blog Network',
                'email' => 'advertising@techblognetwork.com',
                'contact_person' => 'David Wilson',
                'phone' => '+44-20-7946-1234',
                'company' => 'Tech Blog Network Ltd',
                'address' => '789 Tech Lane, London, UK',
                'country' => 'United Kingdom',
                'currency' => 'GBP',
                'balance' => 18000.00,
                'status' => 'active',
                'traffic_sources' => ['reddit', 'hackernews', 'medium', 'dev.to'],
                'settings' => [
                    'payment_frequency' => 'monthly',
                    'minimum_payout' => 150,
                    'auto_approve_campaigns' => true,
                ],
            ],
            [
                'name' => 'Mobile App Publishers',
                'email' => 'partnerships@mobileapppublishers.com',
                'contact_person' => 'Jennifer Lee',
                'phone' => '+1-555-0321',
                'company' => 'Mobile App Publishers Inc.',
                'address' => '321 Mobile Avenue, San Francisco, CA 94102',
                'country' => 'United States',
                'currency' => 'USD',
                'balance' => 35000.00,
                'status' => 'active',
                'traffic_sources' => ['app_store', 'google_play', 'influencer_marketing'],
                'settings' => [
                    'payment_frequency' => 'weekly',
                    'minimum_payout' => 500,
                    'auto_approve_campaigns' => false,
                ],
            ],
            [
                'name' => 'European Affiliate Network',
                'email' => 'contact@europeanaffiliate.com',
                'contact_person' => 'Pierre Dubois',
                'phone' => '+33-1-9876-5432',
                'company' => 'European Affiliate Network SARL',
                'address' => '654 Affiliate Boulevard, Paris, France',
                'country' => 'France',
                'currency' => 'EUR',
                'balance' => 28000.00,
                'status' => 'active',
                'traffic_sources' => ['email_marketing', 'seo', 'display_ads', 'native_ads'],
                'settings' => [
                    'payment_frequency' => 'bi-weekly',
                    'minimum_payout' => 300,
                    'auto_approve_campaigns' => true,
                ],
            ],
        ];

        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }
    }
}
