<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1000">
        <meta name="robots" content="noindex,nofollow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', '管理画面') }}</title>
        <link rel="stylesheet" href="/admin/css/common.css" media="all">
        <link rel="stylesheet" href="/admin/css/admin.css" media="all">
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="/admin/js/admin.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body id="pageAdminLogin">
        {{ $slot }}
    </body>
</html>
