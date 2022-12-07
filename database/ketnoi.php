<?php
    $host ="localhost";
    $name ="root";
    $pass = "";
    $dbname = "hoctap";
    $con = mysqli_connect($host,$name,$pass,$dbname);
    if(!$con)
    {
        die("khong ket noi dc".mysqli_connect_error());
    }
    else
    {
        echo "kết nối thành công";
    }
?>