<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('advertiser_id')->constrained()->onDelete('cascade');
            $table->foreignId('publisher_id')->constrained()->onDelete('cascade');
            $table->foreignId('offer_id')->constrained()->onDelete('cascade');
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('campaign_id', 100)->unique(); // External campaign ID
            $table->enum('status', ['active', 'paused', 'completed', 'cancelled'])->default('active');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('budget', 15, 2)->nullable(); // Total campaign budget
            $table->decimal('daily_budget', 15, 2)->nullable(); // Daily budget limit
            $table->decimal('bid_amount', 10, 2)->nullable(); // Bid per click/impression
            $table->string('currency', 3)->default('USD');
            $table->json('targeting_rules')->nullable(); // Geo, device, time targeting
            $table->json('tracking_params')->nullable(); // UTM parameters, etc.
            $table->text('landing_page_url')->nullable();
            $table->timestamps();

            // Indexes
            $table->index(['advertiser_id', 'status']);
            $table->index(['publisher_id', 'status']);
            $table->index(['offer_id', 'status']);
            $table->index('status');
            $table->index(['start_date', 'end_date']);
            $table->index('campaign_id');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
