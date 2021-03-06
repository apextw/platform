<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sub-Domain Routing
    |--------------------------------------------------------------------------
    |
    | You can use the admin panel on a separate subdomain.
    | For example: 'admin.example.com'
    |
    */

    'domain' => env('DASHBOARD_DOMAIN', dashboard_domain()),

    /*
    |--------------------------------------------------------------------------
    | Route Prefixes
    |--------------------------------------------------------------------------
    |
    | This prefix method can be used for the prefix of each
    | route in the administration panel. For example, you can change to '/admin'
    |
    */

    'prefix' => env('DASHBOARD_PREFIX', '/dashboard'),

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Provide a convenient mechanism for filtering HTTP
    | requests entering your application.
    |
    */

    'middleware' => [
        'public'  => ['web'],
        'private' => ['web', 'platform'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    |
    | Available settings
    |
    */

    'auth'  => true,

    /*
    |--------------------------------------------------------------------------
    | Main Route
    |--------------------------------------------------------------------------
    |
    |
    */
    'index' => 'platform.main',

    /*
    |--------------------------------------------------------------------------
    | Available fields to form templates
    |--------------------------------------------------------------------------
    |
    | Declared fields for user filling.
    | Be shy and add to what you need
    |
    */

    'fields' => [
        'textarea'     => Orchid\Screen\Fields\TextAreaField::class,
        'input'        => Orchid\Screen\Fields\InputField::class,
        'tags'         => Orchid\Screen\Fields\TagsField::class,
        'select'       => Orchid\Screen\Fields\SelectField::class,
        'relationship' => Orchid\Screen\Fields\RelationshipField::class,
        'picture'      => Orchid\Screen\Fields\PictureField::class,
        'datetime'     => Orchid\Screen\Fields\DateTimerField::class,
        'checkbox'     => Orchid\Screen\Fields\CheckBoxField::class,
        'wysiwyg'      => Orchid\Screen\Fields\TinyMCEField::class,
        'password'     => Orchid\Screen\Fields\PasswordField::class,
        'markdown'     => Orchid\Screen\Fields\SimpleMDEField::class,
        'label'        => Orchid\Screen\Fields\LabelField::class,
        'upload'       => Orchid\Screen\Fields\UploadField::class,
        'utm'          => Orchid\Screen\Fields\UTMField::class,
        'view'         => Orchid\Screen\Fields\ViewField::class,
        'code'         => Orchid\Screen\Fields\CodeField::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard Resource
    |--------------------------------------------------------------------------
    |
    | Automatically connect the stored links. For example js and css files
    |
    */

    'resource' => [
        'stylesheets' => [],
        'scripts'     => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Template view
    |--------------------------------------------------------------------------
    |
    |
    */

    'template' => [
        'header' => 'platform::layouts.header',
        'footer' => 'platform::layouts.footer',
    ],

    /*
    |--------------------------------------------------------------------------
    | Support Email
    |--------------------------------------------------------------------------
    |
    | The address where customer support e-mails should be sent.
    |
    */

    'support' => 'support@example.com',

    /*
    |--------------------------------------------------------------------------
    | Attachment
    |--------------------------------------------------------------------------
    |
    | ....
    |
    */

    'attachment' => [
        'small'  => Orchid\Attachment\Templates\Small::class,
        'medium' => Orchid\Attachment\Templates\Medium::class,
        'large'  => Orchid\Attachment\Templates\Large::class,
    ],

];
