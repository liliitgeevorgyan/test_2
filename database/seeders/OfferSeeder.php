<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offers = [
            [
                'advertiser_id' => 1,
                'name' => 'TechCorp Software Trial',
                'description' => 'Free 30-day trial of our premium software suite',
                'category' => 'Software',
                'type' => 'registration',
                'payout' => 15.00,
                'currency' => 'USD',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'daily_cap' => 100,
                'total_cap' => 10000,
                'targeting' => [
                    'countries' => ['US', 'CA', 'GB'],
                    'devices' => ['desktop', 'mobile'],
                    'age_range' => [25, 65],
                ],
                'creative_assets' => [
                    'banners' => ['banner_728x90.jpg', 'banner_300x250.jpg'],
                    'landing_pages' => ['landing_page_1.html', 'landing_page_2.html'],
                ],
                'tracking_url' => 'https://techcorp.com/trial?affiliate_id={affiliate_id}',
            ],
            [
                'advertiser_id' => 2,
                'name' => 'Global Finance Credit Card',
                'description' => 'Apply for our premium credit card with cashback rewards',
                'category' => 'Finance',
                'type' => 'lead',
                'payout' => 45.00,
                'currency' => 'GBP',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'daily_cap' => 50,
                'total_cap' => 5000,
                'targeting' => [
                    'countries' => ['GB', 'IE'],
                    'devices' => ['desktop', 'mobile', 'tablet'],
                    'income_min' => 25000,
                ],
                'creative_assets' => [
                    'banners' => ['credit_card_banner.jpg'],
                    'landing_pages' => ['credit_card_landing.html'],
                ],
                'tracking_url' => 'https://globalfinance.com/credit-card?ref={affiliate_id}',
            ],
            [
                'advertiser_id' => 3,
                'name' => 'EcoGreen Solar Panels',
                'description' => 'Get a free quote for solar panel installation',
                'category' => 'Home Improvement',
                'type' => 'lead',
                'payout' => 25.00,
                'currency' => 'EUR',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'daily_cap' => 75,
                'total_cap' => 7500,
                'targeting' => [
                    'countries' => ['DE', 'FR', 'NL', 'BE'],
                    'devices' => ['desktop', 'mobile'],
                    'home_owner' => true,
                ],
                'creative_assets' => [
                    'banners' => ['solar_banner_1.jpg', 'solar_banner_2.jpg'],
                    'landing_pages' => ['solar_quote.html'],
                ],
                'tracking_url' => 'https://ecogreen.com/solar-quote?partner={affiliate_id}',
            ],
            [
                'advertiser_id' => 4,
                'name' => 'HealthTech Fitness App',
                'description' => 'Download our premium fitness tracking app',
                'category' => 'Health & Fitness',
                'type' => 'install',
                'payout' => 2.50,
                'currency' => 'USD',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'daily_cap' => 500,
                'total_cap' => 50000,
                'targeting' => [
                    'countries' => ['US', 'CA', 'AU', 'GB'],
                    'devices' => ['mobile'],
                    'interests' => ['fitness', 'health', 'wellness'],
                ],
                'creative_assets' => [
                    'banners' => ['fitness_app_banner.jpg'],
                    'landing_pages' => ['app_download.html'],
                ],
                'tracking_url' => 'https://healthtech.com/app-download?source={affiliate_id}',
            ],
            [
                'advertiser_id' => 5,
                'name' => 'Fashion Forward Clothing Sale',
                'description' => 'Shop our exclusive clothing collection with 30% off',
                'category' => 'Fashion',
                'type' => 'sale',
                'payout' => 8.00,
                'currency' => 'EUR',
                'status' => 'active',
                'start_date' => '2024-01-01',
                'end_date' => '2024-12-31',
                'daily_cap' => 200,
                'total_cap' => 20000,
                'targeting' => [
                    'countries' => ['FR', 'DE', 'IT', 'ES'],
                    'devices' => ['desktop', 'mobile', 'tablet'],
                    'gender' => ['female', 'male'],
                ],
                'creative_assets' => [
                    'banners' => ['fashion_sale_banner.jpg'],
                    'landing_pages' => ['fashion_sale.html'],
                ],
                'tracking_url' => 'https://fashionforward.com/sale?affiliate={affiliate_id}',
            ],
        ];

        foreach ($offers as $offer) {
            Offer::create($offer);
        }
    }
}
