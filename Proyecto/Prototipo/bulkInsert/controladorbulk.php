<?php
    include ("./util.php");
    if(isset($_POST["path"])){
        $path=$_POST["path"];
        bulkInsert($path);
    }
?> 