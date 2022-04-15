<?php

namespace TutorTonyM\QuickForms;

use Illuminate\Support\ServiceProvider;
use TutorTonyM\QuickForms\Views\Components\AlertModal;
use TutorTonyM\QuickForms\Views\Components\ContactForm;
use TutorTonyM\QuickForms\Views\Components\Modals;
use TutorTonyM\QuickForms\Views\Components\ReCaptcha;
use TutorTonyM\QuickForms\Views\Components\ReCaptchaModal;
use TutorTonyM\QuickForms\Views\Components\ReCaptchaPush;
use TutorTonyM\QuickForms\Views\Components\ReCaptchaStack;
use TutorTonyM\QuickForms\Views\Components\Script;
use TutorTonyM\QuickForms\Views\Components\ScriptPush;
use TutorTonyM\QuickForms\Views\Components\ScriptStack;
use TutorTonyM\QuickForms\Views\Components\Style;
use TutorTonyM\QuickForms\Views\Components\StylePush;
use TutorTonyM\QuickForms\Views\Components\StyleStack;
use TutorTonyM\QuickForms\Views\Components\SubscribeForm;

class TtmQuickFormsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/ttm-quick-forms.php',
            'ttm-quick-forms'
        );
    }

    public function boot()
    {
        $this->loadViewComponentsAs('ttm-quick-forms', [
            AlertModal::class,
            ContactForm::class,
            Modals::class,
            ReCaptcha::class,
            ReCaptchaModal::class,
            ReCaptchaPush::class,
            ReCaptchaStack::class,
            Script::class,
            ScriptPush::class,
            ScriptStack::class,
            Style::class,
            StylePush::class,
            StyleStack::class,
            SubscribeForm::class,
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'ttm-quick-forms');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../resources/views/components' => resource_path('views/components/vendor/TutorTonyM/quick-forms'),
        ], 'ttm-quick-forms-components');

        $this->publishes([
            __DIR__.'/../public/js/ttm-quick-forms.js' => public_path('js/vendor/TutorTonyM/quick-forms/ttm-quick-forms.js'),
        ], 'ttm-quick-forms-script-public');

        $this->publishes([
            __DIR__.'/../public/js/ttm-quick-forms.js' => resource_path('js/vendor/TutorTonyM/quick-forms/ttm-quick-forms.js'),
        ], 'ttm-quick-forms-script-resource');

        $this->publishes([
            __DIR__ . '/../public/css/ttm-quick-forms.css' => public_path('css/vendor/TutorTonyM/quick-forms/ttm-quick-forms.css'),
        ], 'ttm-quick-forms-style-public');

        $this->publishes([
            __DIR__ . '/../resources/scss/ttm-quick-forms.scss' => resource_path('scss/vendor/TutorTonyM/quick-forms/ttm-quick-forms.scss'),
        ], 'ttm-quick-forms-style-resource');

        $this->publishes([
            __DIR__.'/../public/js/ttm-quick-forms.js' => public_path('js/vendor/TutorTonyM/quick-forms/ttm-quick-forms.js'),
            __DIR__ . '/../public/css/ttm-quick-forms.css' => public_path('css/vendor/TutorTonyM/quick-forms/ttm-quick-forms.css'),
        ], 'ttm-quick-forms-public');

        $this->publishes([
            __DIR__.'/../config/ttm-quick-forms.php' => config_path('ttm-quick-forms.php')
        ], 'ttm-quick-forms-config');

        $this->register();
    }
}