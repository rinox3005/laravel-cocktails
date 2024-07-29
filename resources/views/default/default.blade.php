<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite("resources/js/app.js")
    <title>@yield('page_title', "Cocktails")</title>
</head>

<body>
    <header class="position-sticky top-0 z-3">
        @include("partials.navbar")
    </header>
    <main>
        <div class="container">
            @yield("main")
        </div>
    </main>
</body>

</html>