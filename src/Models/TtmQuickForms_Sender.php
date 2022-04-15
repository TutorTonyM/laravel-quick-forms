<?php

namespace TutorTonyM\QuickForms\Models;

use Illuminate\Database\Eloquent\Model;

class TtmQuickForms_Sender extends Model
{
    public $timestamps = false;
    public $table = "ttm_quick_forms_contact_senders";

    protected $fillable = [
        'ttm_sender_subject',
        'ttm_sender_first_name',
        'ttm_sender_last_name',
        'ttm_sender_email',
        'ttm_sender_phone',
        'ttm_sender_message',
    ];
}