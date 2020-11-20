
<?php
  session_start();
  include ('_header.html');
//  if($_SESSION["rol"] == "Terapeuta"){
//  include ('../sidebar/_sidebarT.html');
//  } else {
  include ('../sidebar/_sidebarA.html');
//  }
  include('_main.html');
  include ('_footer.html');
?>
  