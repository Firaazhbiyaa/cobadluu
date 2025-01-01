<?php
include_once("koneksi.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $tahun = $_POST['tahun'];
    $provinsi = $_POST['provinsi'];
    $bulan = $_POST['bulan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jumlah = $_POST['jumlah'];

    $result = mysqli_query($db, "UPDATE data_kematian SET tahun='$tahun',provinsi='$provinsi',bulan='$bulan',jenis_kelamin='$jenis_kelamin',jumlah='$jumlah' WHERE id=$id");
    
    header("Location: data.php");
}
?>
<?php
$id = $_GET['id'];
 
// Fetech data based on id
$result = mysqli_query($db, "SELECT * FROM data_kematian WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
    $tahun = $row['tahun'];
    $provinsi = $row['provinsi'];
    $bulan = $row['bulan'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $jumlah = $row['jumlah'];
}
?>
<html>
<head>	
    <title>UAS BRYAN</title>
</head>
 
<body>
<center>
    <header>
    <h1>FORM EDIT</h1>
</header>
    <hr>
    <form name="update_data" method="post" action="edit.php">
        
        <table width="">
            <tr> 
                <td>Tahun</td>
                <td><input type="text" name="tahun" value='<?php echo $tahun;?>' required></td>
            </tr>
            <tr> 
                <td><label>Provinsi</label></td>
                <td><input type="text" name="provinsi" value='<?php echo $provinsi;?>' required></td>
            </tr>
            <tr> 
                <td>bulan</td>
                <td><select id="bulan" name="bulan">
                    <option value='<?php echo $bulan;?>'><?php echo $bulan;?></option>
                    <option value=''>Pilih Bulan</option>
                    <option value='Januari'>Januari</option>
                    <option value='Februari'>Februari</option>
                    <option value='Maret'>Maret</option>
                    <option value='April'>April</option>
                    <option value='Mei'>Mei</option>
                    <option value='Juni'>Juni</option>
                    <option value='Juli'>Juli</option>
                    <option value='Agustus'>Agustus</option>
                    <option value='September'>September</option>
                    <option value='Oktober'>Oktober</option>
                    <option value='November'>November</option>
                    <option value='Desember'>Desember</option>
                    </select></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><select id='jenis_kelamin' name="jenis_kelamin">
                <option value='<?php echo $jenis_kelamin;?>'><?php echo $jenis_kelamin;?></option>
                <option value=''>Pilih Jenis Kelamin</option>
                <option value='Laki laki'>Laki laki</option>
                <option value='Perempuan'>Perempuan</option>
                </select></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value='<?php echo $jumlah;?>' required></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td>
                    <input type="submit" name="update" value="Update" onClick="clicked();">
                </td>
                </tr>
        </table>
        
    </form>
    <script type="text/javascript">
        function clicked() {
            alert('Data Updated');
        }
    </script>
    </center>
    
    <a href="data.php" ><button class="btn-back">Back</button></a>
</body>
</html>