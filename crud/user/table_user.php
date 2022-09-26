<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset ($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table User</title>
</head>
<body>
    <!-- <center> -->
        <h2>INI TABLE USERS</h2>
        <div id="submit">
            <button type="submit">
            <a href="tambah_user.php"> Tambah User </a>
            </button>

            <button type="submit">
            <a href="../../aut/index.php"> Lihat Table Roles </a>
            </button>
        </div>
        <br>
        <table align="" border="1">
            <tr>
                <td>ID</td>
                <td>NAME ROLES</td>
                <td>NAMA</td>
                <td align="center">EMAIL</td>
                <td>PASSWORD</td>
         
                <td colspan="3" align="center">ACTION</td>
            </tr>
            <?php
        include "koneksi.php";
        $no=0;
        $query = mysqli_query($koneksi, "SELECT u.*, r.name FROM users as u
        INNER JOIN roles as r ON r.id = u.roles_id");
        while($result =mysqli_fetch_array($query)):
            $no++;
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $result['name']?></td>
                <td><?php echo $result['nama']?></td>
                <td><?php echo $result['email']?></td>
                <td align="center"><?php echo $result['password']?></td>
         
                <td><a href="detail_user.php?detail=<?=$result['id']?>">Detail</a></td>
                <td><a href="hapus_user.php?hapus=<?=$result['id']?>">Hapus</a></td>
                <td><a href="edit_user.php?edit=<?=$result['id']?>">Edit</a></td>
            </tr>
            <?php
            endwhile;
            ?>
        </table>
        <p>
            <a href="login_user.php"> Keluar </a>
        </p>
    <!-- </center> -->
</body>
</html>