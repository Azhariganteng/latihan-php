<?php
include 'koneksi.php';
session_start();


if (!isset($_SESSION['nama'])) {
    $_SESSION['status'] = "GAGAL";
    header("location: login.php");
}
if (isset($_SESSION['pesan'])) {
    echo $_SESSION['pesan'];
    unset ($_SESSION['pesan']);
}
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset ($_SESSION['message']);
}
if (isset($_SESSION['hapus'])) {
    echo $_SESSION['hapus'];
    unset ($_SESSION['hapus']);
}             
if (isset($_SESSION['edit'])) {
    echo $_SESSION['edit'];
    unset ($_SESSION['edit']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <div class="container">

    </div class="row">
    <div class="col-md-4 offset-md-4 mt-5">

    </div class="card">
    <div class="card-body" align="center">
        <p>
        <h1>Hello <?php echo $_SESSION['nama'] ?></h1>
        </p>
        <p>
        
        </p>

        
    </div>
    </div>
    </div>
</body>

</html>


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
    <center>
    <h2>INI TABLE ROLLS</h2>    
    <form method="POST" action="table_role.php">
    <!-- memanggil data yang telah diinputkan agar bisa ditampilkan di file action -->
        <input type="text" name="nama_role" />
        <!-- Kemudian atribut "name" pada kolom input digunakan untuk membuat variable penampung nilai, -->
        <button type="submit" value="submit">TAMBAH ROLE</button>
    </form>
                <br></br>
                <table align="center" border="1">
        <tr>
            <td>NO</td>
            <td>ROLES_ID</td>
            <td>NAME_ROLES</td>
            <td colspan="3" align="center">AKSI</td>
        </tr>
        <?php
        include "koneksi.php";
        $no=0;
        $query = mysqli_query($koneksi, "SELECT * FROM roles");
        while($result =mysqli_fetch_array($query)):
            $no++;
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $result['id'];?></td>
                <td><?php echo htmlspecialchars($result['name']);?></td>
                <td><a href="detail.php?abc=<?=$result['id']?>">Detail</td>
                                <!-- I -->
                <!-- $_GET ngambil dari url                 -->
                <!-- php?abc adalah query parameter -->
                <td><a href="hapus.php?hapus=<?=$result['id']?>">Hapus</td>
                <td><a href="edit.php?edit=<?=$result['id']?>">Edit</td>
            </tr>
            <?php
        endwhile;
        ?>
        </div>
    </center>
    </table>
    <p>
    <a href="logout.php"> Logout</a>
    </p>
    
</html>