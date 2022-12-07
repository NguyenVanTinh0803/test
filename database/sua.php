<?php
    include_once('ketnoi.php');
    if(isset($_GET['maSV']))
    {
        $masv = $_GET['maSV'];
        $sql = "SELECT * FROM sv inner join lop where sv.maLop = lop.maLop and maSV = $masv";
        $result = mysqli_query($con,$sql);//ket quar cuủa việc truy vấn
        $row = mysqli_fetch_assoc($result);//kết quả trả về của vuệc truy vấn sql nào đó, dưới dạng 1 mảng kết họp
       
        //var_dump($sql);

        //var_dump($row);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="masv"> masv</label>
        <input type="text" name ="masv" value=<?=$row['maSV']?> readonly >
        <br>
        <label for="hoten"> Họ tên</label>
        <input type="text" name ="hoten" value=<?=$row['hoTen']?> readonly>
        <br>
        <label for="gioitinh"> Giới Tính</label>
        <input type="text" name ="gioitinh" value=<?=$row['gioiTinh']?> readonly>
        <br>
        <label for="quequan"> Quê quán</label>
        <input type="text" name ="quequan" value=<?=$row['queQuan']?> readonly>
        <br>
        <label for="ngaysinh"> Ngày Sinh</label>
        <input type="text" name ="ngaysinh" value=<?=$row['ngaySinh']?> readonly>
        <br>
        <label for="dantoc"> Dân Tộc</label>
        <input type="text" name ="dantoc" value=<?=$row['danToc']?> readonly>
        <br>
        <label for="tenlop"> Lớp</label>
        <input type="text" name ="tenlop" value=<?=$row['tenLop']?> readonly>
        <br>
        <label for="gvcn"> Giáo Viên</label>
        <input type="text" name ="gvcn" value=<?=$row['giaoVienCN']?> readonly>
        <br>
    </form>
</body>
</html>
