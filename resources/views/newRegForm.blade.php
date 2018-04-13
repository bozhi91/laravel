<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <body>
        <div class="flex-center position-ref full-height">
            
            @if(empty($error))

            <h3>Introduce a new user</h3><br>
            <form action="/storeReg" method="post">
                name <input type="text" name="name"/><br>
                phone <input type="text" name="tel"/><br>
                email <input type="text" name="email"/><br>
                <input type="submit" value="Submit"><br>
            </form>
            @else
                <h2>The e-mail already exist</h2>
                <a href="/newRegForm">
                    <button>Go Back</button>
                </a>
            @endif

        </div>
    </body>
</html>
