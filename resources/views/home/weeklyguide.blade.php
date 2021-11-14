<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Guide</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
        .vh-50 {
            height: 50vh;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-between align-items-center sticky-top bg-white">
        <div class="brand">
            <img src="{{ URL::to('/')}}/images/logo.png" alt="Logo" class="brand-logo">
        </div>
        <ul class="nav px-5">
            <li><a href="#" class="btn mx-1">Home</a></li>
            <li><a href="#" class="btn mx-1">Weekly Guide</a></li>
            <li><a href="#" class="btn mx-1">FAQs</a></li>
            <li><a href="#" class="btn btn-primary mx-1">Appointment</a></li>
        </ul>
    </div>
    <div class="landing vh-50 bg-primary d-flex justify-content-center align-items-center text-white">
        <h1>Weekly Guide</h1>
    </div>
    <div class="container py-5">
        <div id="weeklyguide">
            @isset($weeks)
            @foreach($weeks as $week)
            <div class="guide shadow-sm mb-4 rounded d-flex align-items-center">
                <a href="#">
                    <img src="{{ $week->image }}" alt="" class="m-1 rounded rounded-1">
                </a>
                <div class="d-flex justify-content-between p-5 w-100">
                    <h4>{{$week->title}}</h4>

                    <a href="#" class="btn btn-outline-primary">Read</a>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</body>

</html>