<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>پنل مدیریت</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/admin/plugins/font-awesome/css/font-awesome.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="/admin/http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="/admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="/admin/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/admin/dist/css/custom-style.css">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('icon.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        @include('layouts.admin.sidebar')
