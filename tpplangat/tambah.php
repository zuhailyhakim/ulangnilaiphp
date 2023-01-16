<?php
include "connection.php";
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $no_ndp=$_POST['nondp'];
    $nama_pelajar=$_POST['nama_pelajar'];
    $no_kp=$_POST['no_kp'];
    $jantina=$_POST['jantina'];
    $no_hp=$_POST['no_hp'];

   $sql= " INSERT INTO info_pelajar (id,nondp,nama_pelajar,no_kp,jantina,no_hp)
    values ('$id','$no_ndp','$nama_pelajar','$no_kp','$jantina','$no_hp')";
    $result=mysqli_query($samb,$sql);
    if($result){
        echo "<script>alert('pendaftaran ahli berjaya');
        window.location='tambah.php'</script>";
      }else{
        echo "<script>alert('pendaftaran ahli gagal!');
        window.location='tambahpelajar.php'</script>"; 
          }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table,tr,th,td{border: 2px black solid; 
       border-collapse: collapse;
      padding: 20px; text-align: center; margin: auto;}
    body{background-color: cadetblue;}
      .img1{height: 200px; width: 200px; margin-left: 150px;}
      .img2{height: 200px; width: 200px; margin-left: 650px;}
      .button{margin-left: 650px;}
    </style>
    
</head>
<body>
<div class="container"><button class="button"> <a href="tambahpelajar.php" > add user</a></button></div>
<table class="table">
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table>
            <caption>SENARAI NAMA PELAJAR</caption>
            <tr>
                <td class="head">Id</td>
                <td class="head">nombor ndp</td>
                <td class="head">nama</td>
                <td class="head">nombor kp</td>
                <td class="head">Jantina</td>
                <td class="head">nombor hp</td>
                <td class="head">Operation</td>
            </tr>
            <?php
            $sql = "SELECT * FROM info_pelajar ORDER BY id ASC";
            $data = mysqli_query($samb, $sql);
            while ($pelajar = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $pelajar['id']; ?></td>
                    <td><?php echo $pelajar['nondp']; ?></td>
                    <td><?php echo $pelajar['nama_pelajar']; ?></td>
                    <td><?php echo $pelajar['no_kp']; ?></td>
                    <td><?php echo $pelajar['jantina']; ?></td>
                    <td><?php echo $pelajar['no_hp']; ?></td>
                    <td><a href="padampelajar.php?nondp=<?php echo $pelajar['nondp'];?>">delete</td>
                </tr> 
            <?php 
            } 
            ?> 
        </table>
    </center>
</body>

</html>