<?php
if(isset($_GET['abc'])) {
    $roles_id = $_GET['abc'];
}
include "koneksi.php";
$query =mysqli_query($koneksi, "SELECT * FROM roles WHERE id='$roles_id'");
$result =mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>DETAIL ROLES</h2>
    <table border="0" cellpadding="4">
    <tr>
        <td>Roles_id</td>
        <td>: <?php echo $result['id']?></td>
    </tr>
    <tr>
        <td>Nama_Roles</td>
        <td>: <?php echo $result['name']?></td>
    </tr>
    </table>
    </body>
</html>