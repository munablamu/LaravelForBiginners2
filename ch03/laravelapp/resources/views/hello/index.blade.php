<html>
    <head>
        <title>Hello/Index</title>
        <style>
            body { font-size:16pt; color:#999; }
            h1 { font-size:50pt; text-align:right; color:#eee;
                margin: -20px 0px -30px 0px; letter-spacing:-4pt; }
        </style>
    </head>
    <body>
        <h1>Blade/Index</h1>
        <p>{{$msg}}</p>
        <form method="POST" action="/hello">
            @csrf
            <input type="text" name="msg">
            <input type="submit">
    </body>
</html>
