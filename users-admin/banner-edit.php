<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MarketRental - Document</title>

    <link rel="stylesheet" href="../css/applicant.css" type="text/css">
</head>
<?php
include "profilebar.php";
include "nav.php";
include "../backend/1-connectDB.php";
include "../backend/1-import-link.php";
require "../backend/manage-banner.php";
?>

<body>
    <nav aria-label="breadcrumb mb-3 mt-3">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item fs-5 "><a href="./banner.php" class="text-decoration-none">จัดการแบนเนอร์</a></li>
            <li class="breadcrumb-item active fs-5" aria-current="page">แก้ไขข้อมูลแบนเนอร์</li>
        </ol>
    </nav>
    <div class="applybox">
        <form id="applyform" method="POST" enctype="multipart/form-data">
            <div class="form-outer" style="overflow: visible;">
                <h1 id="headline">แก้ไขข้อมูลแบนเนอร์</h1>
                <!-- form--1 -->
                <div id="stepOne" class="row border shadow-sm p-5 mt-3 mb-3 rounded">
                    <div class="des_input">หัวข้อ</div>
                    <input class="form-control col-6" type="text" placeholder="หัวข้อ" name="bn_toppic" value="<?php echo $row2['bn_toppic'] ?>" >

                    <div class="des_input">รายละเอียด</div>
                    <textarea name="bn_detail" class=" form-control" placeholder="รายละเอียด" id="" cols="30" rows="5" style="border-radius: 5px;resize: none; margin-left:5px;" > <?php echo $row2['bn_detail'] ?></textarea>

                    <div class="des_input">รูปภาพ</div>
                    <input class="sqr-input col-12 form-control" type="file" aria-label="แนบรูปภาพ" name="bn_pic" id="imgInp" accept="image/png, image/gif, image/jpeg">
                    <div class="des_input">รูปภาพปัจุบัน : </div>
                    <div class="p-0">
                        <img style="width:750px;margin-top:10px;" class="img-fluid rounded" src='../<?php echo $row2["bn_pic"] ?>' id="blah">
                    </div>
                    <input class="form-control col-6" type="text" placeholder="หัวข้อ" name="bn_id" value="<?php echo $row2['bn_id'] ?>" hidden>

                    <input type="submit" class="btn btn-primary mt-3" id="add-data" name="bn-submit-edit" value="บันทึกข้อมูล">
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>

</html>