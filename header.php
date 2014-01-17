<?php
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
?>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="index.php">PAN EPPAA</a>
      <div class="nav-collapse collapse">
  <img src='img/logo.png' width='60px' height='60px'/>

        <ul class="nav">
  <?php
  if (strcmp(curPageName(), "index.php")==0) {
    echo '<li class="active">';
  }
  else {
    echo '<li>';
  }
 ?>
<a href="index.php" class="big">Home</a></li>
  <?php
  if (strcmp(curPageName(), "adopted.php")==0) {
    echo '<li class="active">';
  }
  else {
    echo '<li>';
  }
 ?>
<a href="adopted.php" class="big">Adottati</a></li>
  <?php
  if (strcmp(curPageName(), "about.php")==0) {
    echo '<li class="active">';
  }
  else {
    echo '<li>';
  }
 ?>
<a href="about.php" class="big">Chi siamo</a></li>
  <?php
  if (strcmp(curPageName(), "events.php")==0) {
    echo '<li class="active">';
  }
  else {
    echo '<li>';
  }
 ?>
<a href="events.php" class="big">Eventi</a></li>
  <?php
  if (strcmp(curPageName(), "contact.php")==0) {
    echo '<li class="active">';
  }
  else {
    echo '<li>';
  }
 ?>
<a href="contact.php" class="big">Contatti</a></li>
  <?php
  if (strcmp(curPageName(), "help.php")==0) {
    echo '<li class="active">';
  }
  else {
    echo '<li>';
  }
 ?>
<a href="help.php" class="big">Aiutaci</a></li>
  <?php
  if (strcmp(curPageName(), "advice.php")==0) {
    echo '<li class="active">';
  }
  else {
    echo '<li>';
  }
 ?>
<a href="advice.php" class="big">Consigli</a></li>
  </ul>
        <!--<form class="navbar-form pull-right">
            <input class="span2" type="text" placeholder="Email">
            <input class="span2" type="password" placeholder="Password">
            <button type="submit" class="btn">Sign in</button>
        </form>-->
      </div>
    </div>
  </div>
</div>
