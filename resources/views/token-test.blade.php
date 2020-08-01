<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 30vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div>
                <p>This is your access token, please put it in the form below to be able to use it (this is just for test). Access token: {{ $token }}</p>
            </div>
        </div>
        <div style="margin-top: 25px" class="card flex-center">
            <div class="card-body">
                <form method="post" action="{{ route('test-token') }}">
                    {{ csrf_field() }}
                    <label style="margin-left: 25px" for="token">Access Token</label>
                    <input id="token" name="token" value="{{ $token }}">
                    <button style="margin-left: 25px">Test</button>
                </form>
            </div>
        </div>
    </body>
</html>
