<?php
include_once "header.php" ?>
 <section id="main-section">
 <?php
 if(isset($page)) {
 if($page == 'home')
 require("./Views/home.php");
 else
 require("./Views/".$page.".php");
 }
 ?>
 </section>
<?php include_once "footer.php" ?>