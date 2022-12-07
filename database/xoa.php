<?php
    include_once('ketnoi.php');
    if(isset($_GET['maSV']))//kiểm tra ng dùng là kích nút xoá để truyền id=maSV Chưa
    
    {
        $maSV = $_GET['maSV'];
    }
    
    $sql = "DELETE from sv where maSV =$maSV";
    //var_dump($sql);
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location:hienthi.php");
?>