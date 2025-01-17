<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> MarketRental - คำร้องเรียน</title>



    <link rel="stylesheet" href="../css/banner.css">

    <link rel="stylesheet" href="../css/complain.css">



</head>



<?php

include "profilebar.php";

include "nav.php";

include "../backend/1-connectDB.php";

if (isset($_GET['mkr_id'])) {

    $mkr_id = $_GET['mkr_id'];

    $sql = "SELECT * FROM market_detail WHERE (mkr_id = '$mkr_id') ";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    extract($row);





    $query_toppic = "SELECT * FROM toppic";

    $result_toppic = mysqli_query($conn, $query_toppic);



    //qry

    $count_n = 1;

    $data = "SELECT complain.*, toppic.toppic,users.username , comp_status.* FROM complain 

    JOIN toppic ON (complain.toppic_id = toppic.toppic_id)

    JOIN users ON (complain.users_id = users.users_id)

    JOIN comp_status ON (complain.status = comp_status.cs_id)

    WHERE (mkr_id = '$mkr_id') ";

    $result = mysqli_query($conn, $data);
}
?>



<body>

    <nav aria-label="breadcrumb mb-3 ">

        <ol class="breadcrumb ">

            <li class="breadcrumb-item fs-5 "><a href="./index.php?mkr_id=<?php echo $row['mkr_id']; ?>" class="text-decoration-none">หน้าหลัก</a></li>

            <li class="breadcrumb-item active fs-5" aria-current="page">จัดการคำร้องเรียน <?php echo $row['mkr_name'] ?></li>

        </ol>

    </nav>

    <div>

        <h1 id="headline">จัดการคำร้องเรียน <?php echo $row['mkr_name'] ?></h1>

        <div id="content">

            <div id="table" class="bannertb border p-3 shadow-sm rounded mt-3">

                <table id="myTable" class="display table table-striped dt-responsive" style="width: 100%;">

                    <thead>

                        <tr>

                            <th scope="col">ลำดับ</th>

                            <th scope="col">วันที่ร้องเรียน</th>
                            <th scope="col">จำนวนการโต้ตอบ</th>

                            <th scope="col">วันที่มีการโต้ตอบล่าสุด</th>

                            <th scope="col">ประเภทการร้องเรียน</th>

                            <th scope="col">หัวข้อการร้องเรียน</th>

                            <th scope="col">ผู้ร้องเรียน</th>

                            <th scope="col">สถานะ</th>

                            <th scope="col">จัดการ</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php while ($row = $result->fetch_assoc()) :
                            $comp_id = $row['comp_id'];
                            $sql2 = "SELECT reply.*,users.username FROM reply 
                              JOIN users ON (reply.users_id = users.users_id) 
                              WHERE (comp_id = '$comp_id')";
                            $query2 = mysqli_query($conn, $sql2);
                            $total_record = mysqli_num_rows($query2);
                            if ($total_record > 0) {
                                $last_id = mysqli_query($conn, "SELECT MAX(timestamp) AS maxid FROM reply WHERE comp_id = $comp_id");
                                $mid = mysqli_fetch_array($last_id);
                                extract($mid);
                                $comp_id = $mid['maxid'];
                                $rpdate = date("d/m/Y", strtotime($comp_id));
                            } else {
                                $rpdate = '-';
                            }
                        ?>

                            <tr>

                                <td><?php echo $count_n; ?></td>

                                <td><?php echo date("d/m/Y", strtotime($row['timestamp'])) ?></td>

                                <td><?php echo $total_record; ?></td>

                                <td><?php echo $rpdate ?></td>

                                <td><?php echo $row['toppic'] ?></td>

                                <td><?php echo $row['comp_subject'] ?></td>

                                <td><?php echo $row['username'] ?></td>

                                <td>

                                    <div class="p-1 rounded text-center <?php echo $row['cs_color']; ?>"><?php echo $row['cs_name']; ?></div>

                                </td>

                                <td>
                                    <a type="button" class="btn btn-outline-primary" id="<?php echo $row['comp_id']; ?>" href="./thread.php?mkr_id=<?php echo $mkr_id ?>&&comp_id=<?php echo $row['comp_id'] ?>">
                                        ดูรายละเอียด
                                    </a>
                                </td>

                            </tr>

                        <?php $count_n++;

                        endwhile; ?>

                    </tbody>

                </table>

            </div>



        </div>



</body>
<script src="../backend/script.js"></script>

</html>