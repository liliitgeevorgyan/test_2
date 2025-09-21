<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GeoLocationSeeder::class,
            DeviceSeeder::class,
            AdvertiserSeeder::class,
            PublisherSeeder::class,
            OfferSeeder::class,
            CampaignSeeder::class,
            CampaignEventSeeder::class,
            CampaignMetricSeeder::class,
        ]);
    }
}
