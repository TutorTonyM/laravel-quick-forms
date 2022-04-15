<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTtmContactSendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttm_quick_forms_contact_senders', function (Blueprint $table) {
            $table->id();
            $table->string('ttm_sender_subject');
            $table->string('ttm_sender_first_name');
            $table->string('ttm_sender_last_name');
            $table->string('ttm_sender_email')->nullable();
            $table->string('ttm_sender_phone')->nullable();
            $table->text('ttm_sender_message');
            $table->timestamp('ttm_sent_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ttm_quick_forms_contact_senders');
    }
}
