<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS BRYAN</title>

    <?php include 'koneksi.php'; ?>
    <?php 
        $json_data = array();
        $hasilQuery = $db->prepare("SELECT tahun, provinsi, bulan, jenis_kelamin, jumlah FROM data_kematian");
        $hasilQuery->execute();
        $hasilQuery->bind_result($tahun,$provinsi,$bulan, $jenis_kelamin, $jumlah);

        while($hasilQuery->fetch()) {
            $json_array['tahun'] = $tahun;
            $json_array['provinsi'] = $provinsi;
            $json_array['bulan'] = $bulan;
            $json_array['jenis_kelamin'] = $jenis_kelamin;
            $json_array['jumlah'] = $jumlah;
            
        array_push($json_data, $json_array);
        }
    ?>
    
    
    <script>
        var dataPerpus = <?php echo json_encode($json_data); ?>; 
        var indeks = 0;
        function baru(){
            var myWindow = window.open("tambah.php","_self");
            }
    </script>
</head>
<body>
<header>
<h1>DATA KEMATIAN</h1>
</header>
<br>
<hr><br><br>
        
<button onClick="baru();">Create Data</button>
<hr>
<center>
<form action="" method="post">
<table class="sort" id="tabel" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th >Tahun</th>
            <th>Provinsi</th>
            <th>Bulan</th>
            <th>Jenis Kelamin</th>
            <th>Jumlah</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
    
    
    <?php
        $query = "SELECT * FROM data_kematian";
        $query_run  = mysqli_query($db, $query);
        $i = 1;
        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                ?>
                <tr>
                    <td><?php
                    echo $i;
                    $i++;
                    ?></td>
                    <td><?= $row['tahun']; ?></td>
                    <td><?= $row['provinsi']; ?></td>
                    <td><?= $row['bulan']; ?></td>
                    <td><?= $row['jenis_kelamin']; ?></td>
                    <td><?= $row['jumlah']; ?></td>                    
                    <td>
                        <center>
                        <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> ||
				        <a class="hapus"  href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                        </center>
                    </td>
                </tr>
                <?php
            }
        }
        else
        {
            ?>
                <tr>
                    <td colspan="5"><center>No Data Found</center></td>
                </tr>
            <?php
        }
    ?>
    </tbody>
</table>
    </center>
</body>

<script>
    function sortTblColumn(tblSwp, column, switching) {
                var swap = switching ? 1 : -1;
                var myTable = document.getElementById("tabel").tBodies[0]; 
                var rows = Array.from(myTable.querySelectorAll("tr"));

                var sortedRows = rows.sort((up, down) => {
                    var upSort = up.querySelector(`td:nth-child(${ column + 1 })`).innerHTML.toLowerCase();
                    var downSort = down.querySelector(`td:nth-child(${ column + 1 })`).innerHTML.toLowerCase();
                    if (isNaN(parseInt(upSort)) && isNaN(parseInt(downSort))) {
                        return upSort > downSort ? (1 * swap) : (-1 * swap);
                    }
                    return +upSort > +downSort ? (1 * swap) : (-1 * swap);
                });

                myTable.append(...sortedRows);

                var tblSwp = document.querySelector("#tabel"); 

                tblSwp.querySelectorAll("th").forEach(th => th.classList.remove("sortAsc", "sortDesc"));
                tblSwp.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("sortAsc", switching);
                tblSwp.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("sortDesc", !switching);
            }



                document.querySelectorAll(".sort th").forEach(headerCell => {
                headerCell.addEventListener("click", () => {
                var tableElement = headerCell;
                var headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
                var currentSwap = headerCell.classList.contains("sortAsc");
                sortTblColumn(tableElement, headerIndex, !currentSwap);
            });
            });
</script>
</html>