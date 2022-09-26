<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset ($_SESSION['message']);
}
$edit = $_GET['edit'];
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$edit'");
$qry = mysqli_query($koneksi, "SELECT * FROM roles");
$result = mysqli_fetch_array($query);

?>

<h1>Edit Data User</h1>
<form action="proses_edit_user.php" method="POST">
<?php
if($result) {
?>
<table>
    <tr>

        <td><input type="hidden" name="id" value="<?php echo $result['id']?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>: <input type="text" name="nama" value="<?php echo $result['nama']?>"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>: <input type="text" name="email" value="<?php echo $result['email']?>"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>: <input type="password" name="password" id="inputPassword" value="<?php echo $result['password']?>"></td>
        <td><input type="checkbox" onclick="myFunction()">Lihat Password</td>
        <td>
            <script>
                function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
            </script>
        </td>
    </tr>
    <tr>
        <td>Roles</td>
        <td>
            : <select name="name">
                <?php
                
                

                while($cari = mysqli_fetch_array($qry)) {
                ?>
                <option <?php if ($cari['id'] == $result['roles_id']) {echo "selected";} ?> value="<?php echo $cari['id']?>"> <?php echo $cari['name']?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <br>
            <input type="submit" value="Edit">
        </td>
    </tr>
    <tr>
        <td>
            <br>
                <a href="table_user.php">Kembali</a>
        </td>

    </tr>

    <?php
}else{
    echo 'Id Tidak Ada';
}
?>
</table>    
</form>