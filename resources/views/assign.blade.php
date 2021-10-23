<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body{
                background-color: #EDEDED;
            }
            .assign-crew, .assign-ship{
                background-color: white;
                margin: 50px;
                padding: 20px;
            }
            .collect{
                display: block;
            }
        </style>
    </head>
    <body>
        <div class="assign-crew">
            <form action="POST">
                <div class="title">
                    <h2>Crew Information</h2>
                </div>
                <div class="collect">
                <p>Name:</p> 
                    <input type="text" >
                <p>Assign Rank:</p> 
                    <select name="" id="">
                        <option value=""></option>
                    </select>
                </div>
                <input type="submit" value="Submit" />
            </form>
        </div>

        <div class="assign-ship">
            <div class="title">
                <h2>Ship Information</h2>
            </div>
            <div class="collect">
               <p>Ship Name:</p> 
                <input type="text" >
               <p>Assign Crews:</p> 
                <select name="" id="">
                    <option value=""></option>
                </select>
                <p>Speed Class</p>
                <input type="text" >
            </div>
            <input type="submit" value="Submit" />
        </div>
    </body>
</html>
