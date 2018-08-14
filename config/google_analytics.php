<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Google Analytics Id
     |--------------------------------------------------------------------------
     |
     | This is the tracking ID. To find your tracking ID:
     |   1. Sign in to your Analytics account: https://analytics.google.com/
     |   2. Click Admin
     |   3. Select an account from the menu in the ACCOUNT column.
     |   4. Select a property from the menu in the PROPERTY column.
     |   5. Under PROPERTY, click Tracking Info > Tracking Code. Your tracking
     |      ID is displayed at the top of the page.
     |
     */

    'id' => env('GOOGLE_ANALYTICS_ID', null),

    /*
     |--------------------------------------------------------------------------
     | Google Analytics Settings
     |--------------------------------------------------------------------------
     |
     | Google Analytics is disabled by default, when APP_DEBUG=true is not
     | defined in the .env file or debug is set to true in config/app.php.
     | You can override the value by setting enabled to true or false instead.
     |
     */

    'enabled' => env('GOOGLE_ANALYTICS_ENABLED', !config('app.debug')),

];
