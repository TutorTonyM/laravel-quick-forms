<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTtmSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttm_quick_forms_subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('ttm_subscriber_email');
            $table->timestamp('ttm_subscribed_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('ttm_unsubscribed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ttm_quick_forms_subscribers');
    }
}
