<?php
  if( $_SESSION["id"] == 'Terapeuta'){
    include ('../sidebar/_sidebarT.html');
  }
  else if( $_SESSION["id"] == 'Administrador'){
    include ('../sidebar/_sidebarA.html');
  }
?>