<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php session_start(); ?>
<?php
if (($_SESSION["userstype"] != "3")) {
    echo "<script>alert('คุณยังไม่ได้เข้าสู่ระบบ/คุณไม่ใช่แอดมินระบบ');window.location='../index.php';";
} ?>

<head>
    <meta charset="UTF-8">
    <title> MarketRental -  user-profile</title>
    <link rel="stylesheet" href="../css/profilebar.css" type="text/css">
</head>
<?php
    include "../backend/1-connectDB.php";
    include "../backend/1-import-link.php"
?>

<body>
    <div class="dropdown">
        <div class="profileicon" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <p>แอดมินระบบ : <?php echo $_SESSION['username']; ?></p>
            <i id="profileicon" class='bx bxs-user-circle bx-md'></i>
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item" href="password.php"><i class='bx bx-key'></i>เปลี่ยนรหัสผ่าน</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" style="color: red;" href="../backend/auth-logout.php"><i class='bx bx-log-out-circle'></i>ออกจากระบบ</a></li>
        </ul>
    </div>
</body>

</html>