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
          <section id="soon">
               <h1 class="section-header">Niedługo minie termin oddania</h1>
               <div class="grid">
                    <?php
                    // $studentsInSoonLoop = DB::query('SELECT * FROM students WHERE returnbook=:returnbook', [':returnbook'=>'1']);
                    // foreach($studentsInSoonLoop as $studentInSoonLoop) { ?>


                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/18274810_450468415293985_5791790352588547985_n.jpg?oh=5d0595f948104bbc5f8adcd2015ffcfb&oe=5AA990E3" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        2 dni
                                        <?php
                                        // $currentDay = date('Y-m-d');
                                        // echo $currentDay;
                                        // $deadLineDay = DB::query('SELECT * FROM book_lending WHERE student_id=:student_id AND b_to=:b_to', ['student_id'=>$studentInSoonLoop['id'], ':b_to'=> 7]);
                                        // if ($currentDay < $deadLineDay)
                                        ?>
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>524632</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <!-- <h3 class="name"><?php echo $studentInSoonLoop['firstname'] . " " . $studentInSoonLoop['lastname']; ?></h3> -->
                              <!-- <a href="mailto:<?php echo $studentInSoonLoop['email'] ?>" class="btn">wyślij przypomnienie mailem</a> -->
                              <!-- <a href="extend.php?studentid=<?php echo $studentInSoonLoop['s_id'] ?>&bookid=" class="btn">Przedłuż</a> -->
                         </div>
                    </div>
                    <?php
                    // }
                    ?>
               </div>
               <a href="" class="btn btn-section">pokaż wszystko</a>
          </section>

          <section id="comed">
               <h1 class="section-header">Minął Termin oddania</h1>
               <div class="grid">
                    <?php
                    // $needtoreturn = 1;
                    // $currentDate = 'CURDATE()';
                    // $studentid = DB::query('SELECT * FROM students WHERE returnbook=:returnbook', [':returnbook'=>$needtoreturn]);
                    // $studentsInSoonLoop = DB::query('SELECT * FROM students, book_lending WHERE student_id=:s_id AND returnbook=:returnbook AND b_to<=b_to', [':s_id'=>$studentid, 'returnbook'=>$needtoreturn, 'b_to'=>$currentDate]);
                    // foreach($studentsInSoonLoop as $studentInSoonLoop) { ?>


                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/18274810_450468415293985_5791790352588547985_n.jpg?oh=5d0595f948104bbc5f8adcd2015ffcfb&oe=5AA990E3" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        2 dni
                                        <?php
                                        // $currentDay = date('Y-m-d');
                                        // echo $currentDay;
                                        // $deadLineDay = DB::query('SELECT * FROM book_lending WHERE student_id=:student_id AND b_to=:b_to', ['student_id'=>$studentInSoonLoop['id'], ':b_to'=> 7]);
                                        // if ($currentDay < $deadLineDay)
                                        ?>
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>524632</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <!-- <h3 class="name"><?php echo $studentInSoonLoop['firstname'] . " " . $studentInSoonLoop['lastname']; ?></h3> -->
                              <!-- <a href="mailto:<?php echo $studentInSoonLoop['email'] ?>" class="btn">wyślij przypomnienie mailem</a> -->
                              <!-- <a href="extend.php?studentid=<?php echo $studentInSoonLoop['s_id'] ?>&bookid=" class="btn">Przedłuż</a> -->
                         </div>
                    </div>
                    <?php
                    // }
                    ?>
               </div>
               <a href="" class="btn btn-section">pokaż wszystko</a>
          </section>
     </div>
</body>
</html>
