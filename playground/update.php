<?php
require_once 'connectdb.php';
$id_user = "";
$username = "";
$status = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_user = "";
    if (isset($_GET["id"]) && $_GET["id"] != '') {
        $id_user = $_GET["id"];
        $username = $_GET["username"];
        $status = $_GET["status"];
    } else {
        echo "ID User is null";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frmUsername = $frmPassword = "";
    $frmUsername = $_POST["username"];
    $frmPassword = $_POST["password_hash"];

    if ($frmUsername && $frmPassword) {
        $strSQL = "UPDATE user SET id_user=[value-1], username=[value-2], password_hash=[value-3], status=[value-4] WHERE id_user=".$id_user;

        $result = $myconn->query($strSQL);
        if ($result) {
            echo "Add User Complete";
        } else {
            echo "Add User Denied";
        }
    }
}
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
    <form action="update.php" method="post">
        <table border="1">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username "value="<?=$username?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" id="status" value="<?=$status?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
</body>

</html>