<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thi is training project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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