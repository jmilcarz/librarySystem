<nav id="site-nav" class="top">
     <div class="container">
          <a href="" class="logo">
               <h1><?php echo $system_name; ?></h1>
          </a>
          <ul class="links">
               <li><a href=""><i class="fa fa-plus"></i> wypożycz książkę</a></li>
               <li><a href=""><i class="fa fa-undo"></i> zwróć książkę</a></li>
               <li id="toggledropdown">więcej <i class="fa fa-caret-down"></i>
                    <ul class="dropdown" id="navdropdownmenu">
                         <li><a href=""><i class="fa fa-plus"></i> dodaj książkę</a></li>
                         <li><a href="all-books.php"><i class="fa fa-database"></i> baza książek</a></li>
                         <li><a href=""><i class="fa fa-graduation-cap"></i> baza uczni</a></li>
                         <li><a href=""><i class="fa fa-cogs"></i> ustawienia</a></li>
                    </ul>
               </li>
               <li>
                    <a href=""><form action="" method="post">
                         <button type="submit" name="logoutbtn"><i class="fa fa-sign-out"></i> Wyloguj się</button>
                    </form></a>
               </li>
          </ul>
     </div>
</nav>
<nav id="site-nav" class="bottom">
     <div class="container">
          <footer>
               <p>
                    &copy; 2017 | <a href="" target="_blank">Kuba Milcarz</a>
               </p>
          </footer>
          <div class="forms">
               <form action="search.php" method="get">
                    <input type="text" name="qs" placeholder="szukaj po uczniach">
                    <button type="submit" name="searchs"><i class="fa fa-search"></i></button>
               </form>
               <form action="search.php" method="get">
                    <input type="text" name="qb" placeholder="szukaj po kodach książek">
                    <button type="submit" name="searchb"><i class="fa fa-search"></i></button>
               </form>
          </div>
     </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="assets/js/functions.js"></script>
