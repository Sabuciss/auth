<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<h1>Reģistrējies</h1>


<form method="POST">
   @csrf
 @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
  <label for="first_name">Vārds</label><input name="first_name" required><br>
  <label for="last_name">Uzvārds</label><input name="last_name" required><br>
  <label for="email">e-mail</label><input name="email" type="email" required><br>
  <label for="password" >Parole</label><input name="password" type="password" required><br>
  <label for="password" >Paroles pārbaude</label><input name="password_confirmation" type="password" required><br>

 <button >Saglabāt</button>
</form>

</body>
</html>