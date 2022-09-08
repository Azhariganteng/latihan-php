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
    <table align="left" border="1">
    <tr bgcolor="yellow">
            <th>ID</th>
            <th>NAMA</th>
            <th>HARGA_PRODUK</th>
        </tr>
    <?php
        $no=0;
        $total=0;
        $tot_bayar=0;
        $query =mysqli_query($koneksi, "SELECT * FROM produk order by id");
        echo "<pre>";
        print_r(mysqli_fetch_array($query, MYSQLI_ASSOC));
        echo "</pre>";
        while($result =mysqli_fetch_array($query)){
            $no++;
            $tot_bayar += $result['harga_produk'];
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
         <tr>
            <td colspan="1" align="left">TOTAL :</td>
            <td colspan="2" align="center"><?php echo number_format($tot_bayar,0,',','.');?></td>     
    </tr>
    </table>
    
    <center>
    <?php
    $query= mysqli_query($koneksi,
        "SELECT u.nama, u.email, p.tanggal_lahir, p.tempat_lahir
        FROM users as u
        JOIN profil as p ON p.user_id = u.id
    ");
    ?>
    <table align="right" border="1">
        <tr bgcolor="#00ff80">
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

    <?php
    $no=0;
    $total=0;
    $query= mysqli_query($koneksi,
    "SELECT o.identifier, p.nama, p.harga_produk, o.qty, o.payment_method, o.total
    FROM produk as p
    INNER JOIN orders_product as op ON p.id = op.product_id
    INNER JOIN orders as o ON o.id = op.order_id
");
    ?>
    <table align="center" border="1">
        <tr bgcolor="ff8000">
            <td>ID</td>
            <td>IDENTIFIER</td>
            <td>NAMA_PRODUK</td>
            <td>HARGA_PRODUK</td>
            <td>QTY</td>
            <td>PEMBAYARAN</td>
        </tr>
        <?php
        $total=0;
        while($result=mysqli_fetch_array($query)){
            $no++;
            $total=$result ['total'];
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $result['identifier'];?></td>
                <td><?php echo $result['nama'];?></td>
                <td><?php echo $result['harga_produk'];?></td>
                <td><?php echo $result['qty'];?></td>
                <td><?php echo $result['payment_method'];?></td>
            </tr>
            
            <?php
        }
        ?>
         <tr>
            <td colspan="1" align="left">TOTAL :</td>
            <td colspan="5" align="center"><?php echo number_format($total,0,',','.');?></td>     
    </tr>
    <tr>
            <td colspan="1" align="left">TOTAL PRODUK :</td>
            <td colspan="5" align="center">8000</td>     
    </tr>
    </table>
</body>
</html>