<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Login</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/emp.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    {{ HTML::style('css/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('css/sb-admin.css') }}
    {{ HTML::script('js/jquery-1.11.0.min.js') }}
    {{ HTML::script('asset/js/admin.js') }}
</head>

<body>
<div class="wrapper">
    @yield('content')
</div>

{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/emp.js') }}
{{ HTML::script('js/plugins/metisMenu/jquery.metisMenu.js') }}
{{ HTML::script('js/jquery.dataTables.js') }}
</body>