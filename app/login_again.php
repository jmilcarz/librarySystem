<?php
if (isset($_POST['loginbtn'])) {
     // variables
     $username = $_POST['username'];
     $password = $_POST['password'];

     if (DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {
          if (password_verify($password, DB::query('SELECT password FROM users WHERE username=:username', array(':username'=>$username))[0]['password'])) {
               echo 'Logged in!';
               $cstrong = True;
               $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
               $user_id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
               DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
               setcookie("LIBRARY", $token, time() + 60 * 60 * 24 * 99, '/', NULL, NULL, TRUE);
               setcookie("LIBRARY_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
               header('Location: '.$_SERVER['PHP_SELF']);
          } else {
               echo 'Nieprawidłowe hasło!';
          }
     } else {
          echo 'Nieprawidłowa nazwa użytkownika!';
     }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>prosimy zalogować się jeszcze raz</title>
</head>
<body>
     <form action="" method="post" enctype="multipart/form-data">
          <input type="text" name="username" placeholder="Nazwa Użytkownika"><br>
          <input type="password" name="password" placeholder="Hasło"><br>
          <button type="submit" name="loginbtn">zaloguj się</button>
     </form>
</body>
</html>
