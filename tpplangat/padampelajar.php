
<?php
 include('connection.php');
 $nondp = $_GET['nondp'];
 $sql = "DELETE FROM info_pelajar WHERE nondp= '$nondp'";
 $result = mysqli_query($samb, $sql);
 if ($result)
     echo "<script>alert('Berjaya padam rekod')</script>";
else 
   echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='tambah.php'</script>";
?>

