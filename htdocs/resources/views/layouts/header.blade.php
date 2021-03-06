<!DOCTYPE html>
<?php header('Access-Control-Allow-Origin: *'); ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{ csrf_token() }"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keluhan Batu</title>

    <!-- Bootstrap Core CSS -->
    <link href={{asset('/assets/css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{ asset('/assets/css/style.css') }} rel="stylesheet">
    <!-- Custom CSS -->
    <link href={{asset('/assets/css/sb-admin.css') }} rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href={{asset('/css/plugins/morris.css')}} rel="stylesheet">

    <!-- Custom Fonts -->
    <link href={{ asset('/assets/font-awesome/css/font-awesome.min.css') }} rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Chart JS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>