<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Road to Mama</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        #landing {
            background-image: url("{{ URL::to('/') }}/images/pregnant-woman.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: grid;
            grid-template-rows: max-content 1fr;
        }
    </style>
</head>

<body class="antialiased">
    <div id="landing">
        <div class="d-flex justify-content-between align-items-center">
            <div class="brand">
                <img src="{{ URL::to('/')}}/images/logo.png" alt="Logo" class="brand-logo">
            </div>
            <ul class="nav px-5">
                <li><a href="#" class="btn mx-1">Home</a></li>
                <li><a href="{{url('home/weeklyguide')}}" class="btn mx-1">Weekly Guide</a></li>
                <li><a href="#" class="btn mx-1">FAQs</a></li>
                <li><a href="#" class="btn btn-primary mx-1">Appointment</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center flex-column text-primary text-bold">
                <h2 class="ml-md-5">Welcome future mama.</h2>
            </div>
        </div>
    </div>
</body>

</html>