<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="http://bf4db.app/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title') | BF4DB Style Guide</title>
</head>
<body>
<div id="bf4db">
    @include('components.navigation')
    @include('components.header')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
