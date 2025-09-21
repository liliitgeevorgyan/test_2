<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_type', 50); // desktop, mobile, tablet
            $table->string('os', 50)->nullable(); // Windows, iOS, Android, etc.
            $table->string('os_version', 20)->nullable();
            $table->string('browser', 50)->nullable(); // Chrome, Firefox, Safari, etc.
            $table->string('browser_version', 20)->nullable();
            $table->string('brand', 50)->nullable(); // Apple, Samsung, etc.
            $table->string('model', 100)->nullable(); // iPhone 12, Galaxy S21, etc.
            $table->string('screen_resolution', 20)->nullable(); // 1920x1080
            $table->boolean('is_mobile')->default(false);
            $table->boolean('is_tablet')->default(false);
            $table->boolean('is_desktop')->default(false);
            $table->timestamps();

            // Indexes
            $table->index('device_type');
            $table->index('os');
            $table->index('browser');
            $table->index('brand');
            $table->index('is_mobile');
            $table->index('is_tablet');
            $table->index('is_desktop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
