<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
            $table->string('event_type', 50); // click, impression, conversion, install, etc.
            $table->string('event_id', 100)->unique(); // External event ID
            $table->string('user_id', 100)->nullable(); // User identifier (hashed)
            $table->string('session_id', 100)->nullable(); // Session identifier
            $table->string('ip_address', 45)->nullable(); // IPv4 or IPv6
            $table->string('user_agent', 500)->nullable();
            $table->string('referrer', 500)->nullable();
            $table->string('landing_page', 500)->nullable();
            $table->foreignId('geo_location_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('device_id')->nullable()->constrained()->onDelete('set null');
            $table->decimal('revenue', 10, 2)->default(0); // Revenue from this event
            $table->decimal('cost', 10, 2)->default(0); // Cost for this event
            $table->json('custom_data')->nullable(); // Additional event data
            $table->timestamp('event_time'); // When the event occurred
            $table->timestamps();

            // Indexes for efficient querying
            $table->index(['campaign_id', 'event_type']);
            $table->index(['campaign_id', 'event_time']);
            $table->index('event_type');
            $table->index('event_time');
            $table->index('user_id');
            $table->index('session_id');
            $table->index('ip_address');
            $table->index('geo_location_id');
            $table->index('device_id');
            $table->index('created_at');
            
            // Composite index for common queries
            $table->index(['campaign_id', 'event_type', 'event_time']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_events');
    }
}
