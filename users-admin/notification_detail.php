<?php
session_start();
include "../backend/1-connectDB.php";
$users_id = $_SESSION['users_id'];
$notiqry = mysqli_query($conn, "SELECT * FROM `notification` WHERE `users_id` = '0' order by `timestamp` DESC LIMIT 10");
$numRownt = mysqli_num_rows($notiqry);
?>

<?php
if ($numRownt == 0) { ?>
    <li class="p-2">
        <div class="dropdown-item" href="#"><span class="text-secondary">ไม่การแจ้งเตือนในขณะนี้</span></div>
    </li>
    <?php } else {
    while ($rown = $notiqry->fetch_assoc()) :
        if ($rown['status'] == '1') {
            $bg = 'bg-info bg-opacity-10';
        } else {
            $bg = '';
        }

        if ($rown['type'] == '1') {
            $path = './annouce.php?fk_id=' . $rown['fk_id'];
        } else {
            $path = './partner.php?fk_id=' . $rown['fk_id'];
        }

    ?>
        <li class="<?php echo $bg ?> border-bottom">
            <a class="dropdown-item" href="<?php echo $path ?>">
                <span class="text-secondary"><?php $time = date(
                                                    'g:i a',
                                                    strtotime($rown['timestamp']) + 60 * 60 * 7
                                                );
                                                echo date("d/m/Y", strtotime($rown['timestamp'])) . " " . date(" h:i a", strtotime($time)) ?></span>
                <br><span class="fw-bold"><?php echo $rown['n_sub'] ?></span>
                <br><?php echo $rown['n_detail'] ?>
            </a>
        </li>
    <?php
    endwhile; ?>
<?php
}
?>