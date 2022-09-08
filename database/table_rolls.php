<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>INI TABLE ROLLS</h2>    
    <form method="POST" action="kesini.php">
    <!-- memanggil data yang telah diinputkan agar bisa ditampilkan di file action -->
        <input type="text" name="nama_role" />
        <!-- Kemudian atribut "name" pada kolom input digunakan untuk membuat variable penampung nilai, -->
        <button type="submit" value="submit">TAMBAH ROLE</button>
    </form>
                <br></br>
                <table align="left" border="1">
        <tr>
            <td>NO</td>
            <td>ROLES_ID</td>
            <td>NAME_ROLES</td>
            <td colspan="2" align="center">AKSI</td>
        </tr>
        <?php
        include "koneksi.php";
        $no=0;
        $query = mysqli_query($koneksi, "SELECT * FROM roles");
        while($result =mysqli_fetch_array($query)){
            $no++;
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $result['id'];?></td>
                <td><?php echo $result['name'];?></td>
                <td><a href="detail-data.php?abc=<?=$result['id']?>">Detail</td>
                                <!-- I -->
                <!-- $_GET ngambil dari url                 -->
                <!-- php?abc adalah query parameter -->
                <td><a href="hapus-data.php?hapus=<?=$result['id']?>">Hapus</td>
            </tr>
            <?php
        }
        ?>
        </div>
    </table>
</html>