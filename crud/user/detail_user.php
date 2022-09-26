<?php
$id = $_GET['detail'];

include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
$result = mysqli_fetch_array($query);
$qry = mysqli_query($koneksi, "SELECT * FROM roles WHERE id=$result[roles_id]");
$cari = mysqli_fetch_array($qry);
// echo "SELECT * FROM roles WHERE id=$result[roles_id]";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail User</title>
</head>
<body>
    
</body>
    <?php
    if ($result) {
        ?>
        <h2>Detail Data User</h2>
        <table border="0" cellpadding="4">
            <tr>
                <td>Id User</td>
                <td>: <?php echo $result['id']?></td>
            </tr>
            <tr>
                <td>Roles Id</td>
                <td>: <?php echo $result['roles_id']?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $result['nama']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?php echo $result['email']?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <?php echo $result['password']?></td>
            </tr>
            <tr>
                <td>Roles</td>
                <td>: <?php echo $cari['name']?></td>
            </tr>
        </table>
        <?php
    }else{
        echo 'Data Tidak Ada';
    }
    ?>
    <p>
    <a href="table_user.php">Kembali</a>
    </p>
</html>