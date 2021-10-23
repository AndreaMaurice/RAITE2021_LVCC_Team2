<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                justify-items: center;
                text-align: center;
                background-image: url(./assets/img/bg.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
            .welcome {
                margin-top: 15%;
            }
            a{
                text-decoration: none;
            }
            a:hover{
                color: blue;
            }
            h1{
                font-size: 70px;
            }
            .b{
                padding: 10px;
            }
            .buttons{
                text-align: center;
                display: inline;
            }
        </style>
    </head>
    <body>
        <div class="welcome">
            <div>
                <h1>
                Welcome to Seaferer International
                </h1>
            </div>
            <div class="buttons">
                <div class="b">
                    <a href="/assign">Assign Roles</a>
                </div>
                <div class="b">
                    <a href="/view">View Data</a>
                </div>
            </div>   
        </div>
    </body>
</html>
