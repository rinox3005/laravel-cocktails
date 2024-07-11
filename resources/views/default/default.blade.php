<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/js/app.js")
    <title>@yield('page_title', "Cocktails")</title>
</head>
<body>  
    <main>
        <div class="container">
            @yield("main")
        </div>  
    </main>
</body>
</html>