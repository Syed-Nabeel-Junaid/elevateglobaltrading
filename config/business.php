<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Business / Contact Information
    |--------------------------------------------------------------------------
    |
    | Centralized business-identifying values so they're never hardcoded across
    | Blade templates. Defaults below reflect Elevate Global Trading and can be
    | overridden per environment via the corresponding BUSINESS_* variables.
    |
    */

    'name' => env('BUSINESS_NAME', 'Elevate Global Trading'),

    'email' => env('BUSINESS_EMAIL', 'Imrankhannaeem18@gmail.com'),

    'phone' => env('BUSINESS_PHONE', '0301-3765608'),

    'address' => env('BUSINESS_ADDRESS', 'Mezzanine-1, SB-39, Sector X-4, Gulshan-e-Maymar'),

    'hours' => env('BUSINESS_HOURS', 'Mon–Fri, 9:00 AM – 6:00 PM'),

    'social' => [
        'facebook' => env('BUSINESS_SOCIAL_FACEBOOK'),
        'instagram' => env('BUSINESS_SOCIAL_INSTAGRAM'),
        'twitter' => env('BUSINESS_SOCIAL_TWITTER'),
        'linkedin' => env('BUSINESS_SOCIAL_LINKEDIN'),
    ],

];
