<?php
include "profilebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การเช่าทั้งหมด</title>
    <link rel="stylesheet" href="../css/banner.css" type="text/css">
</head>
<?php
include "nav.php";
include "../backend/1-connectDB.php";
include "../backend/1-import-link.php";

?>

<body>
    <h1 id="headline">การเช่าทั้งหมด</h1>
    <div class="d-flex justify-content-between">
        <div class="w-75">
            <form method="POST" class="hstack gap-3 mt-3">
                <label>การเช่าในช่วงวันที่ :</label>
                <input type="date" class="form-control" style="width: 10%;">
                <label>ถึง : </label>
                <input type="date" class="form-control" style="width: 10%;">
                <button type="button" class="btn btn-primary">ค้นหา</button>
            </form>
        </div>
        <div class="hstack">
            <a type="button" class="btn btn-primary" href="./rent-cost.php">จัดการค่าเช่า</a>
        </div>
    </div>
    <div>
        <div id="table" class="border p-3 shadow-sm rounded mt-3">
            <table id="myTable" class="display " style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">วันที่เริ่มเช่า</th>
                        <th scope="col">ชื่อบัญชีผู้ใช้</th>
                        <th scope="col">รหัสแผง</th>
                        <th scope="col">ประเภทร้านค้า</th>
                        <th scope="col">ระยะเวลาการเช่า</th>
                        <th scope="col">ดูรายละเอียด</th>
                        <th scope="col">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1/1/0000</td>
                        <td>สหัสทยา</td>
                        <td>A01</td>
                        <td>ร้านขายน้ำ</td>
                        <td>2 เดือน</td>
                        <td><a name="view" type="button" class="view_data btn btn-outline-primary  ">ดูรายละเอียด</a>
                        </td>
                        <td>
                            <div class="justify-content-center vstack gap-1">
                                <a href="admin-req-pn-denied.php?req_partner_id=<?php echo $row['req_partner_id']; ?>" onclick="return confirm('คุณต้องการปฏิเสธคำร้องนี้หรือไม่')" class=" btn btn-outline-danger w-100" style="font-size:14px;">ยกเลิกการเช่า</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="../backend/script.js"></script>

<script>
    // apply detail popup
    $(document).ready(function() {
        $('.view_data').click(function() {
            var mkrdid = $(this).attr("id");
            $.ajax({
                url: "admin-req-pn-select.php",
                method: "POST",
                data: {
                    mkrdid: mkrdid
                },
                success: function(data) {
                    $('#detail').html(data);
                    $('#dataModal').modal('show');
                }
            });

        })
    });
</script>

</html>