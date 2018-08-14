@if ((is_null($enabled) && config('vendor.google_analytics.enabled', false)) || boolval($enabled))
    <script src="https://ssl.google-analytics.com/analytics.js?id={{ config('vendor.google_analytics.id') }}" async></script>
    <script id="google_analytics" src="{{ asset(mix('js/script.js', 'vendor/google-analytics')) }}" data-id="{{ config('vendor.google_analytics.id') }}"></script>
@endif
