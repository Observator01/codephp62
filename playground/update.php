<?php
include 'template/header.html';
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
    $strSQL = "UPDATE user SET username='" . $username . "', status=" . $status . " WHERE id_user=" . $id_user;
    if ($username == "" && $status == "") {
        echo "Update User Denied";
    } else {
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

<body>

    <form action="update.php?id=<?= $id_user ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address or Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="<?= $username ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="status" value="<?= $status ?>">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <?php include 'template/footer.html'; ?>
</body>

</html>