<?php
include "koneksi.php";
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
    <h2>DATA PRODUK CUY</h2>
    <table border="1" cellpadding="1">
    <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>HARGA_PRODUK</th>
        </tr>
    <?php
        $no=0;
        $query =mysqli_query($koneksi, "SELECT * FROM produk order by id");
        echo "<pre>";
        print_r(mysqli_fetch_array($query, MYSQLI_ASSOC));
        echo "</pre>";
        while($result =mysqli_fetch_array($query)){
            $no++
            ?>
            <tr>
                <td><?php echo $no?></td>                  
                <!-- diatas itu adaalh id dimulai dari 1 -->
                <td><?php echo $result['nama']?></td>
                <td><?php echo $result['harga_produk']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    
    <center>
    <?php
    $query= mysqli_query($koneksi,
        "SELECT u.nama, u.email, p.tanggal_lahir, p.tempat_lahir
        FROM users as u
        JOIN profil as p ON p.user_id = u.id
    ");
    ?>
    <table border="1">
        <tr>
            <td>NAMA</td>
            <td>EMAIL</td>
            <td>TANGGAL_LAHIR</td>
            <td>TEMPAT_LAHIR</td>
        </tr>
        <?php
            while($result=mysqli_fetch_array($query)){
        ?>
                <tr>
                    <td><?php echo $result['nama'];?></td>
                    <td><?php echo $result['email'];?></td>
                    <td><?php echo $result['tanggal_lahir'];?></td>
                    <td><?php echo $result['tempat_lahir'];?></td>
                </tr>
            <?php
            }
            ?>
    </table>
    </center>
</body>
</html>