<?php
include "../backend/1-connectDB.php";

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $data = "SELECT complain.*, toppic.toppic,users.username FROM complain 
    JOIN toppic ON (complain.toppic_id = toppic.toppic_id)
    JOIN users ON (complain.users_id = users.users_id)
     WHERE (comp_id = '$id')";
    $output = '';
    $result = mysqli_query($conn, $data);
    $output .= '<div class="table-responsive">  <table class="table table-bordered">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '
        <div class="row mw-100">
                        <div class="col-4">
                            <img src="../' . $row['comp_file'] . '"class="img-fluid h-100"alt="">
                        </div>
                        <div class="col-8">
                            <h2>หัวข้อ : ' . $row['comp_subject'] . '</h2>
                            <p>ประเภท : ' . $row['toppic'] . '</p>
                            รายละเอียด : 
                            <p> ' . $row['comp_detail'] . '</p>
                            <div class="d-flex justify-content-between">
                                <p >ผู้ร้องเรียน : ' . $row['username'] . '</p>
                                <p>วันที่ร้องเรียน : ' . $row['timestamp'] . '</p>
                            </div>
                        </div>
        </div>
        <div class="mw-100 mt-3">
                        <h6>การตอบกลับ : </h6><input type="text" name="reply" class="form-control" placeholder="ตอบกลับการร้องเรียน" value='. $row['reply'] .'>
                        <input type="number" class="form-control" name="comp_id" title="กรุณากรอกจำนวนที่ต้องการเป็นตัวเลข" value='. $row['comp_id'] .' hidden>         
        </div>
     ';
    }
    echo $output;
}else{}
if (isset($_POST['submit'])) {
    $comp_id = $_POST["comp_id"];
    $reply = $_POST['reply'];

    if (isset($_POST['reply']) != "") {
        $sqlInsert = "UPDATE complain SET reply='$reply',status='ตอบกลับแล้ว' WHERE (comp_id = '$comp_id')";
        if (mysqli_query($conn, $sqlInsert)) {
            echo "<script>alert('ตอบกลับสำเร็จ'); </script>";
        } else {
            echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองอีกครั้ง');</script>";
        }
    } else {
        echo "<script>alert('เกิดข้อผิดพลาดกรุณาลองอีกครั้ง);</script>";
    }
}else{}
