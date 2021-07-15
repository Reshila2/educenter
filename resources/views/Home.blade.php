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
    @extends('layoutss.footer')
    @extends('layoutss.contacts')
    @extends('layoutss.teachers')
    @extends('layoutss.news')
    @extends('layoutss.services')
    @extends('layoutss.unt')
    @extends('layoutss.navbar')

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5HzmuFITuzHFwu1QhlCZkh1HfmSQgjjk&callback=initMap" async defer></script>
</body>
</html>
