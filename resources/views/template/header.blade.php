<!doctype html>
<html lang="en" class="{{ Now('H')->toDateTimeString() > 18 ? 'dark-theme' : 'light-theme'  }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{ url('assets/js/pace.min.js') }}"></script>

  <!--plugins-->
  <link href="{{ url('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="{{ url('assets/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/header-colors.css') }}" rel="stylesheet" />

  <title>Dashboard | Admin</title>
</head>

<body>