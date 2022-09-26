<?php
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT u.*, r.name 
    FROM users as u
    INNER JOIN roles as r ON r.id = u.roles_id
    WHERE email = '$email' and password = '$password'");
    $result = mysqli_fetch_array($query);
?>
<?php
if ($result > 0) {
    $_SESSION['auth'] = $result;
    $_SESSION['auth']['nama_role'] = $result['name'];
    header("location: table_user.php");
    ?>
    <?php
}else{
    header("location: login_user.php");
}
}
?>