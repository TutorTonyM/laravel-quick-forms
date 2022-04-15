<?php

namespace TutorTonyM\QuickForms\Models;

use Illuminate\Database\Eloquent\Model;

class TtmQuickForms_Subscriber extends Model
{
    public $timestamps = false;
    public $table = "ttm_quick_forms_subscribers";

    protected $fillable = [
        'ttm_subscriber_email',
        'ttm_subscribed_at',
        'ttm_unsubscribed_at',
    ];
}