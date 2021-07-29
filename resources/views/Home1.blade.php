<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EduCenter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="css/css/style.css">

</head>
<body>
    @extends('layouts.footer')
    @extends('layouts.news')
    @extends('layouts.contacts')
    @extends('layouts.teachers')
    @extends('layouts.services')
    @extends('layouts.videos')
    @extends('layouts.unt')
    @extends('layouts.navbar')

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5HzmuFITuzHFwu1QhlCZkh1HfmSQgjjk&callback=initMap" async defer></script>
</body>
</html>
