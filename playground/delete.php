<?php
require_once 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_user = "";
    if (isset($_GET["id"]) && $_GET["id"] != '') {
        $id_user = $_GET["id"];
        $strSQL = "DELETE FROM user WHERE id_user=" . $id_user;
        $result = $myconn->query($strSQL);
        if ($result) {
            echo "Add ID User Complete";
        } else {
            echo "Add ID User Denied";
        }
    } else {
        echo "ID User is null";
    }
}

    // $frmPassword = $_POST["password"];

    // if ($frmUsername && $frmPassword) {
        // $strSQL = "INSERT INTO user (username, password_hash, status)";
        // $strSQL .= "VALUES ('" . $frmUsername . "','" . $frmPassword . "',0)";

        // $result = $myconn->query($strSQL);
        // if ($result) {
        //     echo "Add User Complete";
        // } else {
        //     echo "Add User Denied";
    //     }
    // }
// }