<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MarketRental - แก้ไขข้อมูลติดต่อ</title>

    <!-- css  -->
    <link rel="stylesheet" href="../css/contact.css">
</head>
<?php
include "profilebar.php";
include "nav.php";
include "../backend/1-connectDB.php";
include "../backend/1-import-link.php";
require "../backend/manage-contact.php";
?>

<body>

    <h1>เกี่ยวกับเว็บไซต์</h1>
    <button id="addbn" type="button" class="btn btn-primary rigth" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class='bx bxs-edit'></i> แก้ไขข้อมูลติดต่อ
    </button>
    <!-- Modal -->
    <div id="staticBackdrop" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable">
            <form method="POST" enctype="multipart/form-data" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">แก้ไขข้อมูลติดต่อ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="inputct">
                        <h6>รูปภาพโลโก้</h6>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="ct_logo" id="logo" accept="image/png, image/gif, image/jpeg">
                        </div>
                        <div class="mb-3 center">
                            <img style="height:200px;" src="../<?php echo $row["ct_logo"] ?>" class="img-thumbnail round" id="logoex">
                        </div>
                        <h6>ข้อความเกี่ยวกับเว็บไซต์</h6>
                        <div class="input-group mb-3">
                            <textarea class="form-control" name="ct_webinfo"><?php echo $row["ct_webinfo"] ?></textarea>
                        </div>

                    </div>
                    <hr>
                    <div class="inputct">
                        <h6>ข้อมูลติดต่อ 1 </h6>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">ชื่อ-สกุล</span>
                            <input type="text" name="ct1_fname" class="form-control" placeholder="ชื่อ" aria-describedby="basic-addon1" value="<?php echo $row["ct1_fname"] ?>">
                            <input type="text" name="ct1_lname" class="form-control" placeholder="นามสกุล" aria-describedby="basic-addon1" value="<?php echo $row["ct1_lname"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">เบอร์โทรติดต่อ</span>
                            <input type="text" name="ct1_tel" class="form-control" placeholder="เบอร์โทรติดต่อ" aria-describedby="basic-addon2" value="<?php echo $row["ct1_tel"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">อีเมล</span>
                            <input type="text" name="ct1_email" class="form-control" placeholder="อีเมล" aria-describedby="basic-addon3" value="<?php echo $row["ct1_email"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="ct1_pic" class="form-control" id="con1" accept="image/png, image/gif, image/jpeg">
                        </div>
                        <div class="mb-3 center">
                            <img style="height:200px;" src="../<?php echo $row["ct1_pic"] ?>" class="img-thumbnail round" id="con1ex">
                        </div>
                    </div>
                    <hr>
                    <div class="inputct">
                        <h6>ข้อมูลติดต่อ 2 </h6>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">ชื่อ-สกุล</span>
                            <input type="text" name="ct2_fname" class="form-control" placeholder="ชื่อ" aria-describedby="basic-addon1" value="<?php echo $row["ct2_fname"] ?>">
                            <input type="text" name="ct2_lname" class="form-control" placeholder="นามสกุล" aria-describedby="basic-addon1" value="<?php echo $row["ct2_lname"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">เบอร์โทรติดต่อ</span>
                            <input type="text" name="ct2_tel" class="form-control" placeholder="เบอร์โทรติดต่อ" aria-describedby="basic-addon2" value="<?php echo $row["ct2_tel"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">อีเมล</span>
                            <input type="text" name="ct2_email" class="form-control" placeholder="อีเมล" aria-describedby="basic-addon3" value="<?php echo $row["ct2_email"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="ct2_pic" class="form-control" id="con2" accept="image/png, image/gif, image/jpeg">
                        </div>
                        <div class="mb-3 center">
                            <img style="height:200px;" src="../<?php echo $row["ct2_pic"] ?>" class="img-thumbnail round" id="con2ex">
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancel" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" id="save-data" name="bn-submit">บันทึกข้อมูล</button>
                </div>

            </form>
        </div>
    </div>


    <div class="parent mt-3">
        <div class="logo_img">
            <img src="../<?php echo $row["ct_logo"] ?>" alt="logo_marketremtal" class="img-fluid p-3">
        </div>
        <div class="contentbox web-info">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>“<?php echo $row["ct_webinfo"] ?></p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">MarketRental</cite>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="boxcard">
        <div class=" cardcontact" id="ct1">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="../<?php echo $row["ct1_pic"] ?>" class="img-fluid rounded-start ctimg">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h2 class="center"><?php echo $row["ct1_fname"] . " " . $row["ct1_lname"] ?></h2>
                        <p class="center"><?php echo $row["ct1_email"] ?>
                        </p>
                        <p class="center"> <?php echo $row["ct1_tel"] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class=" cardcontact" id="ct2">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="../<?php echo $row["ct2_pic"] ?>" class="img-fluid rounded-start ctimg">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h2 class="center"><?php echo $row["ct2_fname"] . " " . $row["ct2_lname"] ?></h2>
                        <p class="center"><?php echo $row["ct2_email"] ?>
                        </p>
                        <p class="center"><?php echo $row["ct2_tel"] ?></p>


                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script>
    logo.onchange = evt => {
        const [file] = logo.files
        if (file) {
            logoex.src = URL.createObjectURL(file)
        }
    }

    con1.onchange = evt => {
        const [file] = con1.files
        if (file) {
            con1ex.src = URL.createObjectURL(file)
        }
    }
    con2.onchange = evt => {
        const [file] = con2.files
        if (file) {
            con2ex.src = URL.createObjectURL(file)
        }
    }
</script>

</html>