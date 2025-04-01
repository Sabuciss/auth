<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
   
    @auth
    <p>Sveiks, {{ Auth::user()->first_name}}</p>

        <form action="/logout" method="POST">
           @csrf
            <button>Logout</button>
        </form>

    @endauth

    
    @guest
    <p>Sveiks, viesi!</p>
    <a href="/login">Login</a>
    @endguest
</body>
</html>