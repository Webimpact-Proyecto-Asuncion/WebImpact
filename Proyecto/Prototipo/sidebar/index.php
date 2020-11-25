<?php
  if( $_SESSION["rol"] == 'Terapeuta'){
    include ('../sidebar/_sidebarT.html');
  }
  else if( $_SESSION["rol"] == 'Administrador'){
    include ('../sidebar/_sidebarA.html');
  }
?>