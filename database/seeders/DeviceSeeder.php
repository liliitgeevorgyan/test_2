<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = [
            // Desktop devices
            [
                'device_type' => 'desktop',
                'os' => 'Windows',
                'os_version' => '10',
                'browser' => 'Chrome',
                'browser_version' => '120.0',
                'brand' => 'Microsoft',
                'model' => 'Windows PC',
                'screen_resolution' => '1920x1080',
                'is_mobile' => false,
                'is_tablet' => false,
                'is_desktop' => true,
            ],
            [
                'device_type' => 'desktop',
                'os' => 'macOS',
                'os_version' => '14.0',
                'browser' => 'Safari',
                'browser_version' => '17.0',
                'brand' => 'Apple',
                'model' => 'MacBook Pro',
                'screen_resolution' => '2560x1600',
                'is_mobile' => false,
                'is_tablet' => false,
                'is_desktop' => true,
            ],
            [
                'device_type' => 'desktop',
                'os' => 'Linux',
                'os_version' => 'Ubuntu 22.04',
                'browser' => 'Firefox',
                'browser_version' => '121.0',
                'brand' => 'Dell',
                'model' => 'Linux PC',
                'screen_resolution' => '1920x1080',
                'is_mobile' => false,
                'is_tablet' => false,
                'is_desktop' => true,
            ],
            // Mobile devices
            [
                'device_type' => 'mobile',
                'os' => 'iOS',
                'os_version' => '17.2',
                'browser' => 'Safari',
                'browser_version' => '17.0',
                'brand' => 'Apple',
                'model' => 'iPhone 15',
                'screen_resolution' => '1179x2556',
                'is_mobile' => true,
                'is_tablet' => false,
                'is_desktop' => false,
            ],
            [
                'device_type' => 'mobile',
                'os' => 'Android',
                'os_version' => '14',
                'browser' => 'Chrome',
                'browser_version' => '120.0',
                'brand' => 'Samsung',
                'model' => 'Galaxy S24',
                'screen_resolution' => '1080x2340',
                'is_mobile' => true,
                'is_tablet' => false,
                'is_desktop' => false,
            ],
            [
                'device_type' => 'mobile',
                'os' => 'Android',
                'os_version' => '13',
                'browser' => 'Chrome',
                'browser_version' => '119.0',
                'brand' => 'Google',
                'model' => 'Pixel 8',
                'screen_resolution' => '1080x2400',
                'is_mobile' => true,
                'is_tablet' => false,
                'is_desktop' => false,
            ],
            // Tablet devices
            [
                'device_type' => 'tablet',
                'os' => 'iOS',
                'os_version' => '17.2',
                'browser' => 'Safari',
                'browser_version' => '17.0',
                'brand' => 'Apple',
                'model' => 'iPad Pro',
                'screen_resolution' => '2048x2732',
                'is_mobile' => false,
                'is_tablet' => true,
                'is_desktop' => false,
            ],
            [
                'device_type' => 'tablet',
                'os' => 'Android',
                'os_version' => '13',
                'browser' => 'Chrome',
                'browser_version' => '120.0',
                'brand' => 'Samsung',
                'model' => 'Galaxy Tab S9',
                'screen_resolution' => '1600x2560',
                'is_mobile' => false,
                'is_tablet' => true,
                'is_desktop' => false,
            ],
        ];

        foreach ($devices as $device) {
            Device::create($device);
        }
    }
}
