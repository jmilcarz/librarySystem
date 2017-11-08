<?php require_once("./app/init.php"); ?>

<!-- <form action="" method="post">
     <input type="submit" value="wyloguj się" name="logoutbtn">
</form> -->
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title><?php echo $system_name; ?></title>
     <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
     <?php require_once("./modules/nav.mod.php"); ?>

     <div id="main-container">
          <div class="grid">
               <?php
               $books = DB::query('SELECT * FROM books ORDER BY name');
               foreach ($books as $book) {
                    $bookid = $book['b_id'];
                    ?>
                    <h2><?php echo $book['name']; ?></h2>
                    <p><?php echo $book['code']; ?></p>

                    <?php if ($bookid != DB::query('SELECT * FROM book_lending WHERE book_id=:book_id', ['book_id'=>$bookid])) { ?>
                         <i class="fa fa-close"></i>
                    <?php }else { ?>
                         <i class="fa fa-plus"></i>
                    <?php } ?>
               <?php } ?>
          </div>
     </div>

</body>
</html>
