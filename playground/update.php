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
    $username = $status = "";
    $id_user = $_GET["id"];
    $username = $_POST["username"];
    $status = $_POST["status"];
    $strSQL = "UPDATE user SET username='" .$username."', status=".$status." WHERE id_user=".$id_user;
    if ($username == ""&& $status == "") {
        echo "Update User Denied";
    }else{
        echo $strSQL;
        $result = $myconn->query($strSQL);
        if ($result) {
            echo "Update User Complete";
        } else {
            echo "Update User Denied";
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
    <form action="update.php?id=<?=$id_user?>" method="post">
        <table border="1">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?=$username?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status"    value="<?=$status?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
</body>

</html>