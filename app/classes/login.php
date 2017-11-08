<?php
class login {
     public static function loggedin() {
          if (isset($_COOKIE['LIBRARY'])) {
               if (DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['LIBRARY'])))) {
                    $userid = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['LIBRARY'])))[0]['user_id'];
                    if (isset($_COOKIE['LIBRARY_'])) {
                         return $userid;
                    } else {
                         $cstrong = True;
                         $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                         DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$userid));
                         DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['LIBRARY'])));
                         setcookie("LIBRARY", $token, time() + 60 * 60 * 24 * 99, '/', NULL, NULL, TRUE);
                         setcookie("LIBRARY_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
                         return $userid;
                    }
               }
          }
          return false;
     }
}
