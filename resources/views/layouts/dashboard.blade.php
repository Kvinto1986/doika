<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard | {{ config('app.name') }}</title>

    <!-- Styles -->

    @if ($stylePath = Html::asset('dashboard', 'dashboard.css'))
        <link rel="stylesheet" href="{{ $stylePath }}">
    @endif

    <!-- CDN -->
    <script defer src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script defer src="//cdn.ckeditor.com/ckeditor5/10.1.0/classic/ckeditor.js"></script>


    <script defer src="{{ Html::asset('dashboard', 'vendor-dashboard.js') }}"></script>
    <script defer src="{{ Html::asset('dashboard', 'dashboard.js') }}"></script>

    <!-- JS settings -->
    <script type="application/json" data-settings-selector="settings-json">
        {!! json_encode([
            'locale' => app()->getLocale(),
            'appName' => config('app.name'),
            'homePath' => route('widget.home'),
            //'adminHomePath' => route('admin.home', [], false),
            'adminHomePath' => '/doika/admin',
            'adminPathName' => config('app.admin_path'),
            'editorName' => config('app.editor_name'),
            'editorSiteUrl' => config('app.editor_site_url'),
            'locales' => LaravelLocalization::getSupportedLocales(),
            'user' => $loggedInUser,
            'permissions' => session()->get('permissions'),
            'isImpersonation' => session()->has('admin_user_id') && session()->has('temp_user_id'),
            'usurperName' => session()->get('admin_user_name'),
            'blogEnabled' => config('blog.enabled')
        ]) !!}
    </script>

</head>
<body class="@yield('body_class')">
    @yield('body')

    @stack('scripts')
</body>
</html>
