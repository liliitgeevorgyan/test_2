<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_metrics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
            $table->foreignId('geo_location_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('device_id')->nullable()->constrained()->onDelete('set null');
            $table->date('date');
            $table->tinyInteger('hour')->nullable(); // 0-23 for hourly aggregation, null for daily
            $table->bigInteger('impressions')->default(0);
            $table->bigInteger('clicks')->default(0);
            $table->bigInteger('conversions')->default(0);
            $table->bigInteger('installs')->default(0);
            $table->bigInteger('registrations')->default(0);
            $table->bigInteger('sales')->default(0);
            $table->decimal('revenue', 15, 2)->default(0);
            $table->decimal('cost', 15, 2)->default(0);
            $table->decimal('profit', 15, 2)->default(0);
            $table->decimal('ctr', 5, 4)->default(0); // Click-through rate
            $table->decimal('conversion_rate', 5, 4)->default(0); // Conversion rate
            $table->decimal('cpc', 10, 4)->default(0); // Cost per click
            $table->decimal('cpa', 10, 4)->default(0); // Cost per action
            $table->decimal('roi', 8, 4)->default(0); // Return on investment
            $table->decimal('roas', 8, 4)->default(0); // Return on ad spend
            $table->timestamps();

            // Unique constraint to prevent duplicate metrics
            $table->unique(['campaign_id', 'geo_location_id', 'device_id', 'date', 'hour'], 'unique_metrics');
            
            // Indexes for efficient querying
            $table->index(['campaign_id', 'date']);
            $table->index(['campaign_id', 'date', 'hour']);
            $table->index('date');
            $table->index('geo_location_id');
            $table->index('device_id');
            $table->index('created_at');
            
            // Composite indexes for common queries
            $table->index(['date', 'geo_location_id']);
            $table->index(['date', 'device_id']);
            $table->index(['campaign_id', 'geo_location_id', 'date']);
            $table->index(['campaign_id', 'device_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_metrics');
    }
}
