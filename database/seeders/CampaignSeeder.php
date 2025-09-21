<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campaigns = [
            [
                'advertiser_id' => 1,
                'publisher_id' => 1,
                'offer_id' => 1,
                'name' => 'TechCorp Software Trial - Q1 2024',
                'description' => 'Promote TechCorp software trial to tech-savvy professionals',
                'campaign_id' => 'TC-TRIAL-Q1-2024',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-03-31',
                'budget' => 50000.00,
                'daily_budget' => 1000.00,
                'bid_amount' => 0.50,
                'currency' => 'USD',
                'targeting_rules' => [
                    'countries' => ['US', 'CA'],
                    'devices' => ['desktop', 'mobile'],
                    'time_zones' => ['America/New_York', 'America/Los_Angeles'],
                    'hours' => [9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
                ],
                'tracking_params' => [
                    'utm_source' => 'affiliate',
                    'utm_medium' => 'cpc',
                    'utm_campaign' => 'techcorp_trial_q1',
                ],
                'landing_page_url' => 'https://techcorp.com/trial?affiliate_id=DMN001',
            ],
            [
                'advertiser_id' => 2,
                'publisher_id' => 2,
                'offer_id' => 2,
                'name' => 'Global Finance Credit Card - UK Campaign',
                'description' => 'Target UK residents for credit card applications',
                'campaign_id' => 'GF-CC-UK-2024',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'budget' => 75000.00,
                'daily_budget' => 500.00,
                'bid_amount' => 2.00,
                'currency' => 'GBP',
                'targeting_rules' => [
                    'countries' => ['GB'],
                    'devices' => ['desktop', 'mobile', 'tablet'],
                    'age_range' => [25, 65],
                    'income_min' => 25000,
                ],
                'tracking_params' => [
                    'utm_source' => 'content_creators',
                    'utm_medium' => 'social',
                    'utm_campaign' => 'gf_credit_card_uk',
                ],
                'landing_page_url' => 'https://globalfinance.com/credit-card?ref=CCH001',
            ],
            [
                'advertiser_id' => 3,
                'publisher_id' => 3,
                'offer_id' => 3,
                'name' => 'EcoGreen Solar Panels - European Market',
                'description' => 'Promote solar panel quotes across European countries',
                'campaign_id' => 'EG-SOLAR-EU-2024',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'budget' => 30000.00,
                'daily_budget' => 300.00,
                'bid_amount' => 1.25,
                'currency' => 'EUR',
                'targeting_rules' => [
                    'countries' => ['DE', 'FR', 'NL'],
                    'devices' => ['desktop', 'mobile'],
                    'home_owner' => true,
                    'property_type' => ['house', 'townhouse'],
                ],
                'tracking_params' => [
                    'utm_source' => 'tech_blog',
                    'utm_medium' => 'content',
                    'utm_campaign' => 'ecogreen_solar_eu',
                ],
                'landing_page_url' => 'https://ecogreen.com/solar-quote?partner=TBN001',
            ],
            [
                'advertiser_id' => 4,
                'publisher_id' => 4,
                'offer_id' => 4,
                'name' => 'HealthTech Fitness App - Mobile Campaign',
                'description' => 'Drive mobile app installs for fitness tracking app',
                'campaign_id' => 'HT-FITNESS-MOBILE-2024',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'budget' => 25000.00,
                'daily_budget' => 250.00,
                'bid_amount' => 0.15,
                'currency' => 'USD',
                'targeting_rules' => [
                    'countries' => ['US', 'CA', 'AU'],
                    'devices' => ['mobile'],
                    'interests' => ['fitness', 'health', 'wellness'],
                    'app_categories' => ['health', 'fitness', 'lifestyle'],
                ],
                'tracking_params' => [
                    'utm_source' => 'mobile_apps',
                    'utm_medium' => 'in-app',
                    'utm_campaign' => 'healthtech_fitness_mobile',
                ],
                'landing_page_url' => 'https://healthtech.com/app-download?source=MAP001',
            ],
            [
                'advertiser_id' => 5,
                'publisher_id' => 5,
                'offer_id' => 5,
                'name' => 'Fashion Forward Clothing Sale - European Fashion',
                'description' => 'Promote clothing sale to European fashion enthusiasts',
                'campaign_id' => 'FF-FASHION-EU-2024',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'budget' => 40000.00,
                'daily_budget' => 400.00,
                'bid_amount' => 0.75,
                'currency' => 'EUR',
                'targeting_rules' => [
                    'countries' => ['FR', 'DE', 'IT', 'ES'],
                    'devices' => ['desktop', 'mobile', 'tablet'],
                    'gender' => ['female', 'male'],
                    'interests' => ['fashion', 'shopping', 'lifestyle'],
                ],
                'tracking_params' => [
                    'utm_source' => 'european_affiliate',
                    'utm_medium' => 'display',
                    'utm_campaign' => 'fashion_forward_sale_eu',
                ],
                'landing_page_url' => 'https://fashionforward.com/sale?affiliate=EAN001',
            ],
        ];

        foreach ($campaigns as $campaign) {
            Campaign::create($campaign);
        }
    }
}
