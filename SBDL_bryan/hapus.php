<?php
include_once("koneksi.php");
 
$id = $_GET['id'];// id url
 
$result = mysqli_query($db, "DELETE FROM data_kematian WHERE id=$id");

echo "<script>;  
            alert('Data Dihapus');
                document.location.href = 'data.php';
        </script>";

?>