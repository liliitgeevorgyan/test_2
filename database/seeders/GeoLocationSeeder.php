<?php

namespace Database\Seeders;

use App\Models\GeoLocation;
use Illuminate\Database\Seeder;

class GeoLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $geoLocations = [
            [
                'country_code' => 'US',
                'country_name' => 'United States',
                'region_code' => 'CA',
                'region_name' => 'California',
                'city' => 'Los Angeles',
                'timezone' => 'America/Los_Angeles',
                'latitude' => 34.0522,
                'longitude' => -118.2437,
            ],
            [
                'country_code' => 'US',
                'country_name' => 'United States',
                'region_code' => 'NY',
                'region_name' => 'New York',
                'city' => 'New York City',
                'timezone' => 'America/New_York',
                'latitude' => 40.7128,
                'longitude' => -74.0060,
            ],
            [
                'country_code' => 'GB',
                'country_name' => 'United Kingdom',
                'region_code' => 'ENG',
                'region_name' => 'England',
                'city' => 'London',
                'timezone' => 'Europe/London',
                'latitude' => 51.5074,
                'longitude' => -0.1278,
            ],
            [
                'country_code' => 'DE',
                'country_name' => 'Germany',
                'region_code' => 'BE',
                'region_name' => 'Berlin',
                'city' => 'Berlin',
                'timezone' => 'Europe/Berlin',
                'latitude' => 52.5200,
                'longitude' => 13.4050,
            ],
            [
                'country_code' => 'FR',
                'country_name' => 'France',
                'region_code' => 'IDF',
                'region_name' => 'Île-de-France',
                'city' => 'Paris',
                'timezone' => 'Europe/Paris',
                'latitude' => 48.8566,
                'longitude' => 2.3522,
            ],
            [
                'country_code' => 'JP',
                'country_name' => 'Japan',
                'region_code' => '13',
                'region_name' => 'Tokyo',
                'city' => 'Tokyo',
                'timezone' => 'Asia/Tokyo',
                'latitude' => 35.6762,
                'longitude' => 139.6503,
            ],
            [
                'country_code' => 'AU',
                'country_name' => 'Australia',
                'region_code' => 'NSW',
                'region_name' => 'New South Wales',
                'city' => 'Sydney',
                'timezone' => 'Australia/Sydney',
                'latitude' => -33.8688,
                'longitude' => 151.2093,
            ],
            [
                'country_code' => 'CA',
                'country_name' => 'Canada',
                'region_code' => 'ON',
                'region_name' => 'Ontario',
                'city' => 'Toronto',
                'timezone' => 'America/Toronto',
                'latitude' => 43.6532,
                'longitude' => -79.3832,
            ],
        ];

        foreach ($geoLocations as $geoLocation) {
            GeoLocation::create($geoLocation);
        }
    }
}
