<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thi is training project - @yield('title')</title>
    @include('partials.script')
</head>
<body>
    <div>
        <div>
            @include('partials.alerts.success')
            @include('partials.alerts.errors')
        </div>
        @yield('content')
    </div>
</body>
</html>