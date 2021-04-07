<?php
include 'template/header.html';
require_once 'connectdb.php';

$strSQL = "SELECT `id_user`, `username`, `status` FROM `user`";
$result = $myconn->query($strSQL);
?>

<body>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th> ลำดับ</th>
                <th> ชื่อผู้ใช้</th>
                <th> สถานะ</th>
                <th> แก้ไข</th>
                <th> ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_array()) {
                //echo $row["username"] . "<br>";
            ?>
                <tr>
                    <td><?php echo $row["id_user"] ?></td>
                    <td><?php echo $row["username"] ?></td>
                    <td><?php echo $row["status"] ?></td>
                    <td><a href="update.php?id=<?= $row["id_user"] ?>&username=<?= $row["username"] ?>&status=<?= $row["status"] ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete.php?id=<?= $row["id_user"] ?>"><i class="fas fa-trash"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
        <a href="insert.php">Add New User</a>
        <?php include 'template/footer.html'; ?>
</body>

</html>