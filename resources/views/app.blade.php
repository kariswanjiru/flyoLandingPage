<!doctype html>
<html lang=”{{ app()->getLocale() }}”>
<head>
<meta charset=”utf-8">
<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
<meta name=”viewport” content=”width=device-width, initial-scale=1">

<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
<link href=”{{asset('css/app.css') }}” rel=”stylesheet”>
<! — csrf token →
<meta name=”csrf-token” content=”{{ csrf_token() }}”>
<title>Frontend Mentor | Fylo landing page with two column layout</title>
<! — styles →
<link href=”{{asset('css/app.css') }}” rel=”stylesheet”>
</head>
<body>
<div id=”app”>
    
</div>
<script src=”{{asset('js/app.js') }}”></script>
</body>
</html>