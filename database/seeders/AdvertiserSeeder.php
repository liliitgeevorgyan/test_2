<?php

namespace Database\Seeders;

use App\Models\Advertiser;
use Illuminate\Database\Seeder;

class AdvertiserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advertisers = [
            [
                'name' => 'TechCorp Solutions',
                'email' => 'contact@techcorp.com',
                'contact_person' => 'John Smith',
                'phone' => '+1-555-0123',
                'company' => 'TechCorp Solutions Inc.',
                'address' => '123 Tech Street, Silicon Valley, CA 94000',
                'country' => 'United States',
                'currency' => 'USD',
                'balance' => 50000.00,
                'status' => 'active',
                'settings' => [
                    'payment_terms' => 'net_30',
                    'auto_approve' => true,
                    'max_daily_spend' => 5000,
                ],
            ],
            [
                'name' => 'Global Finance Ltd',
                'email' => 'marketing@globalfinance.com',
                'contact_person' => 'Sarah Johnson',
                'phone' => '+44-20-7946-0958',
                'company' => 'Global Finance Ltd',
                'address' => '456 Finance Avenue, London, UK',
                'country' => 'United Kingdom',
                'currency' => 'GBP',
                'balance' => 75000.00,
                'status' => 'active',
                'settings' => [
                    'payment_terms' => 'net_15',
                    'auto_approve' => false,
                    'max_daily_spend' => 8000,
                ],
            ],
            [
                'name' => 'EcoGreen Products',
                'email' => 'partnerships@ecogreen.com',
                'contact_person' => 'Michael Brown',
                'phone' => '+49-30-12345678',
                'company' => 'EcoGreen Products GmbH',
                'address' => '789 Green Street, Berlin, Germany',
                'country' => 'Germany',
                'currency' => 'EUR',
                'balance' => 30000.00,
                'status' => 'active',
                'settings' => [
                    'payment_terms' => 'net_30',
                    'auto_approve' => true,
                    'max_daily_spend' => 3000,
                ],
            ],
            [
                'name' => 'HealthTech Innovations',
                'email' => 'advertising@healthtech.com',
                'contact_person' => 'Dr. Emily Davis',
                'phone' => '+1-555-0456',
                'company' => 'HealthTech Innovations Inc.',
                'address' => '321 Health Boulevard, Boston, MA 02101',
                'country' => 'United States',
                'currency' => 'USD',
                'balance' => 25000.00,
                'status' => 'active',
                'settings' => [
                    'payment_terms' => 'net_45',
                    'auto_approve' => false,
                    'max_daily_spend' => 2000,
                ],
            ],
            [
                'name' => 'Fashion Forward',
                'email' => 'marketing@fashionforward.com',
                'contact_person' => 'Isabella Rodriguez',
                'phone' => '+33-1-2345-6789',
                'company' => 'Fashion Forward SAS',
                'address' => '654 Fashion Avenue, Paris, France',
                'country' => 'France',
                'currency' => 'EUR',
                'balance' => 40000.00,
                'status' => 'active',
                'settings' => [
                    'payment_terms' => 'net_30',
                    'auto_approve' => true,
                    'max_daily_spend' => 4000,
                ],
            ],
        ];

        foreach ($advertisers as $advertiser) {
            Advertiser::create($advertiser);
        }
    }
}
