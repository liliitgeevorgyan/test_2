<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('advertiser_id')->constrained()->onDelete('cascade');
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('category', 100)->nullable();
            $table->enum('type', ['lead', 'sale', 'install', 'click', 'registration'])->default('lead');
            $table->decimal('payout', 10, 2); // Payout per action
            $table->string('currency', 3)->default('USD');
            $table->enum('status', ['active', 'paused', 'expired'])->default('active');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('daily_cap')->nullable(); // Daily conversion cap
            $table->integer('total_cap')->nullable(); // Total conversion cap
            $table->json('targeting')->nullable(); // Geo, device, etc. targeting rules
            $table->json('creative_assets')->nullable(); // Banners, landing pages, etc.
            $table->text('tracking_url')->nullable();
            $table->timestamps();

            // Indexes
            $table->index(['advertiser_id', 'status']);
            $table->index('type');
            $table->index('category');
            $table->index('status');
            $table->index(['start_date', 'end_date']);
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
        Schema::dropIfExists('offers');
    }
}
