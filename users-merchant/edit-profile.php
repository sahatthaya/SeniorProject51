<?php
include "profilebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/password.css" type="text/css">
    <title>แก้ไขข้อมูลบัญชีผู้ใช้</title>
</head>
<script type="text/javascript">
    function success() {
        Swal.fire({
            title: 'แก้ไขข้อมูลสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        })
    }

    function error() {
        Swal.fire({
            title: 'ผิดพลาด',
            text: 'เกิดข้อผิดพลาดกรุณาลองอีกครั้ง',
            icon: 'error',
            showConfirmButton: false,
            timer: 2500
        })
    }
</script>
<?php
include "nav.php";
include "../backend/1-connectDB.php";
include "../backend/1-import-link.php";
$username = $_SESSION['username'];
require "../backend/edit-profile.php";
?>

<body>
    <h1 id="headline">แก้ไขโปรไฟล์</h1>
    <form id="signin" method="POST">
        <div class="row border shadow-sm pt-5 pb-3 px-4 mt-3 mb-3 rounded">
            <div class="col-12">
                <label for="inputAddress " class="form-label des_input">ชื่อบัญชีผู้ใช้</label>
                <input class="input inputcolor form-control" placeholder="ชื่อบัญชีผู้ใช้" type="text" name="username-reg" value="<?php echo $row['username'] ?>" disabled>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label des_input">ชื่อ</label>
                <input class="input inputcolor form-control" placeholder="ชื่อ" type="text" name="firstName-reg" value="<?php echo $row['firstName'] ?>">

            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label des_input">นามสกุล</label>
                <input class="input inputcolor form-control" placeholder="ชื่อนามสกุล" type="text" name="lastName-reg" value="<?php echo $row['lastName'] ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label des_input">อีเมล</label>
                <input class="input inputcolor form-control" type="email" name="email-reg" placeholder="อีเมล" value="<?php echo $row['email'] ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label des_input">เบอร์โทรศัพท์</label>
                <input class="input inputcolor form-control" type="tel" name="tel-reg" placeholder="เบอร์โทรศัพท์" pattern="[0-9]{10}" title="กรุณากรอกเบอร์โทรศัพท์ หมายเลข (0-9) จำนวน 10 ตัว" value="<?php echo $row['tel'] ?>">
            </div>
            <br>
            <div class="col-12">
                <input class="input submit btn btn-primary" type="submit" name="submit-edt" value="บันทึกการแก้ไข">
            </div>

        </div>
    </form>
</body>

</html>