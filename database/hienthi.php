<?php
   
   
   
   include_once('ketnoi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
    function xoa(id){
      var cf = confirm("Bạn có thực sự muốn xóa không");
      if(cf){//xóa
        //submit form xóa lên server
        var f = document.getElementById('xoa');
        document.getElementById('id').value = id;
        f.submit();
      }
    }
  </script>
</head>
<body>
    <table  border="1">
        <Tr>
            <th>STT</th>
            <th>Mã Sinh Viên</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
            <th>Quê Quán</th>
            <th>Ngay sinh</th>
            <th>Dân Tộc</th>
            <th>Tên Lớp</th>
            <th>GVCN</th>
        </Tr>
    <?php
     $sql = "SELECT * FROM sv inner join lop  where sv.maLop = lop.maLop";
     //Truy vấn bảng tblcategory để lấy các bản ghi
    
     $result = mysqli_query($con,$sql);
     $count = 0;
        while($row = mysqli_fetch_assoc($result))
        {
        $count++;
        ?>
            <tr>
                <td><?=$count?></td>
                
                <td><?=$row['maSV']?></td>
                <td><?=$row['hoTen']?></td>
                <td><?=$row['gioiTinh']?></td>
                <td><?=$row['queQuan']?></td>
                <td><?=$row['ngaySinh']?></td>
                <td><?=$row['danToc']?></td>
                <td><?=$row['tenLop']?></td>
                <td><?=$row['giaoVienCN']?></td>
                <td> <button type="button" name="sua" value="sửa"  style="background-color: green" >Sửa</button></td>
                <td><a href="xoa.php?maSV=<?=$row['maSV']?>"><button type="button"class="btn btn-primary" onclick='alert("ban muon xoa")'>Xóa</button></a></td>
                <td><a href="chitiet.php?maSV=<?=$row['maSV']?>" ><button type="button"> Chi Tiết</button></a></td>
                <td><a href="chitiet.php?maSV=<?=$row['maSV']?>" ><button type="button"> Sửa</button></a></td>
            </tr>
    <?php 
            }
    ?>
        </table>
            <?php 
                mysqli_close($con);
            ?>
        
</body>

</html>
//onclick="alert('bạn chắc chắn muốn xoá')"