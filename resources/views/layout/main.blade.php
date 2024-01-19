<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/reset.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/tailwind.css">
    <script src="https://kit.fontawesome.com/1181442c7e.js" crossorigin="anonymous"></script>
    <title>Dr Kaci</title>
</head>

<body>
    <div class="loading">
        <img src="/assets/img/SVG/Logo.svg" alt="" />
    </div>
    <div class="wrapper">
        @include('parts.header')
        <main>
            @include('components.hero-section')
            @yield('content')
        </main>
        @include('parts.footer')

        <script src="/assets/js/script.js"></script>
    </div>
</body>

</html>
