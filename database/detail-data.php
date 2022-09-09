<?php
if (!empty($_GET['abc'])) {
    $roles_id = $_GET['abc'];
}
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM roles WHERE id='$roles_id'");
$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    if ($result) {
    ?>
        <h2>DETAIL ROLES</h2>
        <table border="0" cellpadding="4">
            <tr>
                <td>Roles_id</td>
                <td>: <?php echo $result['id'] ?></td>
            </tr>
            <tr>
                <td>Nama_Roles</td>
                <td>: <?php echo $result['name'] ?></td>
            </tr>
        </table>
    <?php
    } else {

        echo '<h1>DATA TIDAK ADA</h1>';
    }
    ?>



    <?php
    if ($result):
    ?>
        <h2>DETAIL ROLES</h2>
        <table border="0" cellpadding="4">
            <tr>
                <td>Roles_id</td>
                <td>: <?php echo $result['id'] ?></td>
            </tr>
            <tr>
                <td>Nama_Roles</td>
                <td>: <?php echo $result['name'] ?></td>
            </tr>
        </table>
    <?php
     else:

        echo '<h1>DATA TIDAK ADA</h1>';
     endif;
    ?>

</body>

</html>