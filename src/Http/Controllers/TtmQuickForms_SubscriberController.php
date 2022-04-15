<?php

namespace TutorTonyM\QuickForms\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Exception;
use TutorTonyM\QuickForms\Http\Requests\TtmQuickForms_SubscriberValidation;
use TutorTonyM\QuickForms\Models\TtmQuickForms_Subscriber;

class TtmQuickForms_SubscriberController extends BaseController
{
    public function store(TtmQuickForms_SubscriberValidation $request)
    {
        $validated = $request->validated();

        try {
            TtmQuickForms_Subscriber::create($validated);

            return response()->json([
                'success' => true,
                'alert_title' => config('ttm-quick-forms.subscribe-alert-modal-title-success'),
                'alert_message' => config('ttm-quick-forms.subscribe-alert-modal-message-success')
            ]);
        }
        catch (Exception $e){
            $errorMessage = config('app.env') == 'production'
                ? config('ttm-quick-forms.subscribe-alert-modal-message-fail')
                : config('ttm-quick-forms.subscribe-alert-modal-message-fail').' Error Message: '.$e->getMessage();

            return response()->json([
                'success' => false,
                'alert_title' => config('ttm-quick-forms.subscribe-alert-modal-title-fail'),
                'alert_message' => $errorMessage,
            ]);
        }
    }
}