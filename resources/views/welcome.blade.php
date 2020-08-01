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

            .content {
                text-align: center;
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
        <div style="padding-top: 100px" class="flex-center position-ref">
            <div>
                <div class="content">
                    <button>
                        <a href="{{ route('login') }}">Login To Create SPA Authentication Token</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            <div>
                <div class="content">
                    <button>
                        <a href="{{ route('api-login-show') }}">Click For SPA Authentication</a>
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>
