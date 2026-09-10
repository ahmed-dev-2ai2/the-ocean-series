<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Ocean Series</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body class="bg-gray-100">

    @include('components.navbar')

    @include('components.hero')

    @include('components.about')

    @include('components.features')

    @include('components.groups')

    @include('components.gallery')

    @include('components.news')

    @include('components.contact')

    @include('components.footer')

    @include('components.welcome-popup')

</body>

</html>