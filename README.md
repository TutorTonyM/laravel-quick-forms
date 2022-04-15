# laravel-quick-forms
This package allows you to add a subscribe form or a contact us form (or both) to your laravel application with simple Blade components without having to create everything (models, migrations, controllers, validation, views, routes, etc...) from scratch. It also gives you the option to protect both forms with Google reCAPTCHA v2 by integrating it with Blade components as well, and entries to your .env file. 

This package sends the forms via ajax calls so there is no page refresh. Due to its use of ajax calls it depends on jQuery being installed in your project. 

## Requirements
If you want to make use of the re-captcha v2 features, you will need a Google re-captcha account. Getting a Google re-captcha account is free and easy.

## Documentation
The official and more in detailed documentation for this package can be found at [https://TutorTonyM.com/packages/laravel/laravel-quick-forms](https://TutorTonyM.com/packages/laravel/laravel-quick-forms).

## Compatibility
This package is compatible with Laravel 9.0 and above.

## Dependencies
This package is dependent on PHP 8.0 or above.

This package is dependent on jQuery 3 or above.

## How to Use
1. [Install the package](#installation)
2. [Run the migrations](#migrations)
3. [Add the components](#adding-components)
4. [Publish the public files](#publishing-files)

You can modify the form text by adding attributes to it.

5. [Adding attributes to the form](#form-attributes)

If you want to make use of Google Re-Captcha v2 to protect your forms from spambots, complet the following step.

6. [Integrating Re-Captcha to the Project](#using-google-re-captcha)

### Installation
You can install the package via composer:

```bash
composer require tutortonym/laravel-quick-forms
```

The package will automatically register itself, and it will be ready to use.

### Running Migrations
This package includes its own migrations for the subscribe and cuntact us tables. All you have to do is run the migrations with the artisan command migrate as such:

```bash
php artisan migrate
```

### Adding Components
You will have to add some components to your views as they are the link between all modules in this package.

#### Style Component
The style component adds the style tag to your view with the path to the corresponding stylesheet. This component must go in the head of the page.

```html
<x-ttm-quick-forms-style />
```

#### Script Component
The script component adds the script tag to your view with the path to the corresponding javascript file. This component must go after the jQuery script tag, preferably at the bottom of the body.

```html
<x-ttm-quick-forms-script />
```

#### Form Components
There are two form components, one for the subscribe form and the other for the contact us form.

##### Subscribe Form
This component adds the form that will be used to enter the email address to subscribe to your newsletter. This component should be place where you want to show the subscribe form.

```html
<x-ttm-quick-forms-subscribe />
```

##### Contact Us Form
This component adds the form that will be used to send you a message along with the user's info. This component should be place where you want to show the contact us form.

```html
<x-ttm-quick-forms-contact />
```

#### Modal Components
There are two modals being used by this package, the "alert-modal" and the "re-captcha-modal". The first one is required if you want to make use of this package's native alerts. The second one is required only if you want to make use of Re-Captcha to protect any of your forms.

The modals can be included individually or as one single component.

##### Alerts Modal
This component adds the modal responsible for the alerts (success or fail) after submitting the form.
```bash
<x-ttm-quick-forms-alert-modal />
```

##### Re-Captcha Modal
This component adds a modal to display the re-captcha checkbox for verification before submitting the form.
```bash
<x-ttm-quick-forms-re-captcha-modal />
```

##### Both Modals in a Single Component
This component adds both the "alert-modal" and the "re-captcha-modal".
```bash
<x-ttm-quick-forms-modals />
```

These components can be place anywhere in the page as they are not visible until they get triggered, but it is recommended to be placed them towards the bottom of the page.

### Publishing Files
You can publish most files from this package. Most of them are optional but there are two that are required to make the ajax calls and to style the modals. You can publish files by using the artisan command vendor:publish as such:

```bash
php artisan vendor:publish --provider="tutortonym/laravel-subscriber" --tag="public"
```

The two files that are required to be published are:
* ttm-quick-forms.css
* ttm-quick-forms.js

You can publish these files as a group or individually. To do so you can use the following commands:
#### As a group
```bash
php artisan vendor:publish --provider="tutortonym/laravel-subscriber" --tag="public"
```

#### Just the Stylesheet
```bash
php artisan vendor:publish --provider="tutortonym/laravel-subscriber" --tag="style-public"
```

#### Just the Script
```bash
php artisan vendor:publish --provider="tutortonym/laravel-subscriber" --tag="script-public"
```

The style sheet will publish to /public/css/vendor/TutorTonyM/quick-forms/ttm-quick-forms.css, while the script document will publish to /public/js/vendor/TutorTonyM/quick-forms/ttm-quick-forms.js.

There are many other options for publishing these and other files. For more publishing options refer to the [official documentation](#documentation)

### Form Attributes
There are certain values that can be modified on the forms simply by adding attributes to the form components. The sections below show the two forms with their respective available attributes.

#### Subscribe From
* labelText = Modifies the label text shown above the input element. If you wish not to have a label element, simply set this variable to an empty string. (default: Subscribe for Special Offers).
* inputText = Modifies the placeholder's text used in the input element. If you wish not to have a placeholder attribute, simply set this variable to an empty string. (default: Enter your Email).
* buttonText = Modifies the text used in the submit button (default: SUBMIT).

We can modify any or all three by assigning a value to the attributes.
```html
<x-ttm-quick-forms-subscribe labelText="Subscribe" inputText="Email" buttonText="Send" />
```

#### Contact Us Form
* subjectLabelText = Modifies the label text above the subject select element. If you wish to not have a label element, simply set this variable to an empty string. (default: Reason for Message).
* subjectDefaultOptionText = Modifies the default option's text in the subject select element. If you wish to not have a default option, simply set this variable to an empty string. (default: Reason for Message).
* firstNameLabelText = Modifies the label text above the First Name input element. If you wish to not have a label element, simply set this variable to an empty string. (default: First Name).
* firstNameText = Modifies the placeholder's text used in the First Name input element. If you wish to not have a placeholder attribute, simply set this variable to an empty string. (default: First Name).
* lastNameLabelText = Modifies the label text above the Last Name input element. If you wish not to have a label element, simply set this variable to an empty string. (default: Last Name).
* lastNameText = Modifies the placeholder's text used in the Last Name input element. If you wish not to have a placeholder attribute, simply set this variable to an empty string. (default: Last Name).
* emailLabelText = Modifies the label text above the Email input element. If you wish not to have a label element, simply set this variable to an empty string. (default: Email Address).
* emailText = Modifies the placeholder's text used in the Email input element. If you wish not to have a placeholder attribute, simply set this variable to an empty string. (default: Email Address).
* messageLabelText = Modifies the label text above the Message input element. If you wish not to have a label element, simply set this variable to an empty string. (default: Message).
* messageText = Modifies the placeholder's text used in the Message input element. If you wish not to have a placeholder attribute, simply set this variable to an empty string. (default: Message).
* buttonText = Modifies the text used in the submit button (default: SUBMIT).

We can modify any or all of them by assigning a value to the attributes.
```html
<x-ttm-quick-forms-subscribe subjectLabelText="" subjectDefaultOptionText="Chose One" buttonText="Send" />
```

We can also add standard html attributes to the forms like id or class as such:
```html
<x-ttm-quick-forms-subscribe id="subscribe-form" class="my-style" />
```

To learn about more advanced ways to manipulate the forms refer to the [official documentation](#documentation).

### Using Google Re-Captcha
If you want to protect any or all of your forms from spam-bots using re-captcha, first you'll need a Google reCAPTCHA account. Getting an account is easy, but it is outside the scope of this documentation. You can do a quick Google search and find plenty of help on this topic.

Once you have a Google reCAPTCHA account you will need to register your domain/site. If you are on development make sure to register localhost and 127.0.0.1. Again, this is outside the scope of this documentation.

Once you have registered your domain and have the appropriate keys, all you have to do is add a few entries to your .env file.

```dotenv
TTM_QUICK_FORMS_USE_GOOGLE_RECAPTCHA_ON_SUBSCRIBE_FORM=true
TTM_QUICK_FORMS_USE_GOOGLE_RECAPTCHA_ON_CONTACT_FORM=true
TTM_QUICK_FORMS_GOOGLE_RECAPTCHA_SITE_KEY=**********************************
TTM_QUICK_FORMS_GOOGLE_RECAPTCHA_SECRET_KEY=**********************************
```

The "TTM_QUICK_FORMS_USE_GOOGLE_RECAPTCHA_ON_SUBSCRIBE_FORM" entry set to true will enable Google re-captcha v2 functionality on the subscribe form. By default, this option is set to false.

The "TTM_QUICK_FORMS_USE_GOOGLE_RECAPTCHA_ON_CONTACT_FORM" entry set to true will enable Google re-captcha v2 functionality on the contact us form. By default, this option is set to false.

The other two entries "TTM_QUICK_FORMS_GOOGLE_RECAPTCHA_SITE_KEY" and "TTM_QUICK_FORMS_GOOGLE_RECAPTCHA_SECRET_KEY" will identify your domain to the Google API when making re-captcha calls.

Keep in mind that the site key and secret key entries are required to make use to re-captcha.

Also, you can have re-captcha protection enabled in one form and not the other by setting only one of the first two entries above to true.

## More Advanced Settings
This package has a lot more settings that can be configured to your needs such as change the text on the alert and re-captcha modals, add properties to the inner elements of the forms and more. For a more complete list of features visit the [official documentation](#documentation).

## About Tutor Tony M
I'm a developer from the United States who creates software and websites on a daily basis. I'm passionate about what I do, and I like sharing the knowledge I possess. I share my knowledge on different platforms such as
[YouTube.com/TutorTonyM](https://www.youtube.com/tutortonym) and [TutorTonyM.com](https://tutortonym.com/).
You can follow me on my social media @TutorTonyM on [Facebook](http://www.facebook.com/tutortonym), 
[Instagram](https://www.instagram.com/tutortonym), and [Twitter](https://www.twitter.com/tutortonym).

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
