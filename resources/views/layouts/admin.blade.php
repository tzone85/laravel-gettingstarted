<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>That are Laravel Views with Laravel Blade</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
    {{--<link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet'>--}}
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
</head>

<body>

@include('partials.admin-header')
<div class="container">
    @yield('content')
</div>

</body>
</html>
