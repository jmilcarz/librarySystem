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
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/18274810_450468415293985_5791790352588547985_n.jpg?oh=5d0595f948104bbc5f8adcd2015ffcfb&oe=5AA990E3" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        2 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>524632</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Jakub Milcarz</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-1/c0.128.533.533/1016533_558894057539757_370222866_n.jpg?oh=00e46abb67aa1472da8ef9043df94a9b&oe=5A6558F3" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        8 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>426124</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Włodek Markowicz</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/19511494_780968788752461_1757222649295254114_n.jpg?oh=27e5cc0f1fdfce684ab5e54187faf7ce&oe=5AA16C5D" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        11 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>463221</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Jan Pietruszka</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/19511494_780968788752461_1757222649295254114_n.jpg?oh=27e5cc0f1fdfce684ab5e54187faf7ce&oe=5AA16C5D" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        11 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>463221</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Jan Pietruszka</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
               </div>
               <a href="" class="btn btn-section">pokaż wszystko</a>
          </section>

          <section id="comed">
               <h1 class="section-header">Minął Termin oddania</h1>
               <div class="grid">
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/18274810_450468415293985_5791790352588547985_n.jpg?oh=5d0595f948104bbc5f8adcd2015ffcfb&oe=5AA990E3" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        2 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>524632</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Jakub Milcarz</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-1/c0.128.533.533/1016533_558894057539757_370222866_n.jpg?oh=00e46abb67aa1472da8ef9043df94a9b&oe=5A6558F3" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        8 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>426124</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Włodek Markowicz</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/19511494_780968788752461_1757222649295254114_n.jpg?oh=27e5cc0f1fdfce684ab5e54187faf7ce&oe=5AA16C5D" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        11 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>463221</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Jan Pietruszka</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
                    <div class="person">
                         <div class="reminder">
                              <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/19511494_780968788752461_1757222649295254114_n.jpg?oh=27e5cc0f1fdfce684ab5e54187faf7ce&oe=5AA16C5D" alt="">
                              <div class="howmanydays">
                                   <a href="">
                                        11 dni
                                        <span>"80 dni do okoła świata" - Juliusz Vernee</span>
                                        <span>463221</span>
                                   </a>
                              </div>
                         </div>
                         <div class="info">
                              <h3 class="name">Jan Pietruszka</h3>
                              <a href="" class="btn">wyślij przypomnienie mailem</a>
                              <a href="" class="btn">Przedłuż</a>
                         </div>
                    </div>
               </div>
               <a href="" class="btn btn-section">pokaż wszystko</a>
          </section>
     </div>
</body>
</html>
