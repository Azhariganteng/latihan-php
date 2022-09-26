<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM roles");
// while($result = mysqli_fetch_array($query));

?>

<table>
    <h2>Tambah User</h2>
    <form action="proses_tambah.php" method="POST">
        <tr>
            <td></td>
            <td><input type="hidden" name="roles_id"></td>
        </tr>
    <tr>
        <td>NAMA</td>
        <td>: <input type="text" name="nama"></
    </tr>
    <tr>
        <td>EMAIL</td>
        <td>: <input type="text" name="email"></td>
    </tr>
    <tr>
        <td>PASSWORD</td>
        <td>: <input type="password" name="password"></td>
    </tr>
    <tr>
        <td>
        <label>ROLES</label>
        <td>
        : <select name="roles_id">
            <?php
            while($result = mysqli_fetch_array($query)) {
            ?>
            <option value="<?php echo $result['id']?>"> <?php echo $result['name']?></option>
            <?php
            }
            ?>
        </select>
        </td>
        </td>
    </tr>
    <tr>
            <input type="hidden" name="nama_user" />
        <td>
            <br><input type="submit" value="Tambah"></td>
    </tr>
    <tr>
        <td>
            <br>
            <a href="table_user.php">Kembali</a>
            </td>
    </tr>
    </form>
</table>
