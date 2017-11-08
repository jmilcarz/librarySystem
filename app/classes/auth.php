<?php
class auth {
     static function logout() {
          DB::query('DELETE FROM login_tokens WHERE user_id=:userid', array(':userid'=>login::loggedin()));
          setcookie('LIBRARY', '1', time()-3600);
          setcookie('LIBRARY_', '1', time()-3600);
          header('Location: '.$_SERVER['PHP_SELF']);
     }
}
