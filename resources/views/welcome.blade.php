<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <!-- Styles -->

    </head>
    <body style="height: 100vh">
        <div class="bg-dark h-100 d-flex justify-content-center align-items-center">
            <a href="/login">
                <button class="btn btn-lg btn-danger" >
                    Login
                </button>
            </a>
        </div>
    </body>
</html>
