<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MarketRental - ตลาดทั้งหมด</title>
    <!-- css  -->
    <link rel="stylesheet" href="../css/all-market.css" type="text/css">
</head>
<?php
include "profilebar.php";
include "nav.php";
include "../backend/1-connectDB.php";
require "../backend/qry-allmarket.php";
include "../backend/1-import-link.php";

?>

<body>
    <div class="wrap">
        <div class="top">
            <h1 id="headline">ตลาดทั้งหมด</h1>
            <!-- <form name="Searchbox" method="POST" class="search_box">
                <div class="search-input">
                    <label for="#search">
                        <h5>ค้นหา : </h5>
                    </label>
                    <input class="btn border-secondary" type="text" name="search" id="search" placeholder="กรอกข้อมูลที่ต้องการค้นหา" onkeyup="search(this.value)">
                </div>
                <div class="search-btn">
                    <input class="btn btn-primary " id="search" type="submit" name="searchsubmit" value="ค้นหา">
                    <input class="btn btn-danger" id="reset" type="submit" name="reset" value="รีเซ็ต">
                </div>
            </form> -->
        </div>
        <hr>
        <div class="box">
            <?php while ($row = $result->fetch_assoc()) : ?>
                <a class="marketcard radius10" href="market-info.php?mkr_id=<?php echo $row['mkr_id']; ?>">
                    <img src="../<?php echo $row['mkr_pic'] ?>" class="radius10 mkrimg " alt="...">
                    <div class="overlay p-3">
                        <h4 style="text-align: center;"><?php echo $row['mkr_name'] ?></h4>
                        <div class="d-flex justify-content-between markettag px-3">
                            <div class="ptext"><i class='bx bxs-navigation'></i> <?php echo $row['province_name'] ?></div>
                            <div class="ptext"><i class='bx bxs-info-circle'></i> <?php echo $row['market_type'] ?></div>
                        </div>
                        <p class="ptext">เบอร์ติดต่อ : <?php echo $row['tel'] ?></p>
                        <p class="ptext">อีเมล :
                            <?php echo $row['email']; ?>
                        </p>
                        <p class="ptext">วันทำการ :
                            <?php echo $row['opening']; ?>
                        </p>
                    </div>
                </a>
            <?php
            endwhile ?>
        </div>
    </div>
    <hr>
    <?php
    $sql2 = "SELECT * FROM market_detail 
    JOIN users ON (market_detail.users_id = users.users_id)
    JOIN provinces ON (market_detail.province_id = provinces.id)
    JOIN amphures ON (market_detail.	amphure_id = amphures.id)
    JOIN districts ON (market_detail.district_id = districts.id)
    JOIN market_type ON (market_detail.market_type_id = market_type.market_type_id)
     WHERE a_id='1'";
    $query2 = mysqli_query($conn, $sql2);
    $total_record = mysqli_num_rows($query2);
    $total_page = ceil($total_record / $perpage);
    ?>
    <nav aria-label="Page navigation example" style="height: 38px;">
        <ul class="pagination justify-content-end">
            <li class="page-item">
                <a class="page-link" href="all-market.php?page=1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                <li class="page-item"><a class="page-link" href="all-market.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></a></li>
            <?php } ?>
            <li class="page-item">
                <a class="page-link" href="all-market.php?page=<?php echo $total_page; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keyup(function() {
                var search = $(this).val();
                $.ajax({
                    url: '../backend/qry-allmarket.php',
                    method: 'post',
                    data: {
                        query: search
                    },
                    success: function(response) {
                        $("#card").html(response);
                    }
                });
            });
        });
    </script> -->
</body>

</html>