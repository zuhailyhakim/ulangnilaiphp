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
    values ('$id','$nondp','$nama_pelajar','$no_kp','$jantina','$no_hp')";
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
</head> 
<body >
<center><style> body{background-color: cadetblue;}</style>
    <form action="tambah.php" method="POST">
        <table>
            <tr>
                <td class=a> Id </td>
                <td> <input type="text" name="id" placeholder=""> </td>
            </tr>
            <tr>
                <td class=a> No_ndp </td>
                <td> <input type="text" name="nondp" placeholder=""> </td>
            </tr>
            <tr>
                <td class=a> Nama_pelajar </td>
                <td> <input type="text" name="nama_pelajar" placeholder=""></td>
            </tr>
            <tr>
                <td class=a> no_kp</td>
                <td> <input type="text" name="no_kp" placeholder=""></td>
            </tr>
            <tr>
                <td class=a> jantina</td>
                <td> <input type="text" name="jantina" placeholder=""></td>
            </tr>
            <tr>
                <td class=a> no_hp</td>
                <td> <input type="text" name="no_hp" placeholder=""></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    </center>
    </tr>
</body>
</html>


