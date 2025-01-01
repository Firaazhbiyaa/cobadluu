<html>
<head>
    <title>UAS BRYAN</title>
</head>
 
<body>
    <center>
    <header>
    <h1>FORM TAMBAH DATA</h1>
</header><hr><br<br>
    <form action="tambah.php" method="post" name="form1">
        <table border="0">
            <tr> 
                <td>Tahun</td>
                <td><input type="text" name="tahun" required></td>
            </tr>
            <tr> 
                <td><label>Provinsi</label></td>
                <td><input type="text" name="provinsi" required></td>
            </tr>
            <tr> 
                <td>Bulan</td>
                <td><select id='bulan' name="bulan">
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
                </select> </td> 
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><select id='jenis_kelamin' name="jenis_kelamin">
                <option value=''>Pilih Jenis Kelamin</option>
                <option value='Laki laki'>Laki laki</option>
                <option value='Perempuan'>Perempuan</option>
                </select> </td> 
            </tr>
            <tr> 
                <td><label>Jumlah</label></td>
                <td><input type="text" name="jumlah" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add" required></td>
            </tr>
        </table>
    </form>

</center>
    
    <?php
 
    // Check If form submitted, insert form data into table.
    if(isset($_POST['Submit'])) {
        $tahun = $_POST['tahun'];
        $provinsi = $_POST['provinsi'];
        $bulan = $_POST['bulan'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $jumlah = $_POST['jumlah'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($db, "INSERT INTO data_kematian(tahun,provinsi,bulan,jenis_kelamin,jumlah) VALUES('$tahun','$provinsi','$bulan','$jenis_kelamin','$jumlah')");
        
        // Show message when user added
        echo "<script> alert('data ditambahkan'); document.location.href = 'data.php';</script>";
    }
    ?>

<a href="data.php" ><button>Back</button></a>
</body>
</html>