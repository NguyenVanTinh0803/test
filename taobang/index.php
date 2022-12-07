<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('connect.php');
        if(isset($_POST['add']))
        {
            $malop =$_POST['maLop'];
            $tenlop =$_POST['tenlop'];
            $tenGV =$_POST['gvcn'];
            if($con ->query("INSERT INTO lop(maLop,tenLop,giaoVienCN) VALUES (N'$malop,N'$tenlop',N'$tenGV')"))
            {
                echo "<script> alert('Thêm Thành công') </script>";
            }
            else
            {
                echo "<script> alert('Thêm Thất bại') </script>";
            }
            
        }
        mysqli_close($con);
    ?>
    <form action="" method="POST">
        <label for="malop">Mã Lớp</label>
        <input type="text" name="maLop" placeholder="mã Lớp">
        <br>
        <label for="tenlop">Tên Lớp</label>
        <input type="text" name="tenlop"  placeholder="tên Lớp">
        <br>
        <label for="gvcn">GV CN</label>
        <input type="text" name="gvcn" placeholder="GVCN " >
        <br>
        <button type="submit" name ="add"> Thêm</button>

    </form>
</body>
</html>