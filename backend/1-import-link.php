<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap');
    </style>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- icon  -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>

    <!-- ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <!-- js datatable -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>




    <!-- css dadatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css">



    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <!-- bootstrap selectpicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- graph dashboard -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- flickity -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.11/flickity.pkgd.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.11/flickity.css'>

    <!-- jquery ui -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css" />

    <!-- google chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- input mask -->
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

    <!-- datepicker -->
    <link href="lib/mobiscroll/css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="lib/mobiscroll/js/mobiscroll.javascript.min.js"></script>
    <link href="../lib/mobiscroll/css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="../lib/mobiscroll/js/mobiscroll.javascript.min.js"></script>


    <style>
        .swal2-popup {
            font-family: 'Mitr', sans-serif !important;
        }
    </style>
</head>
<script src="../backend/script.js"></script>
<script type="text/javascript">
    // sucess------------------------------------------------------------
    function success() {
        Swal.fire({
            title: 'บันทึกข้อมูลสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        })
    }

    function partnersuccess() {
        Swal.fire({
            title: 'บันทึกข้อมูลสำเร็จ',
            text: 'กรุณารอการตรวจสอบจากผู้ดูแลระบบ',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        })
    }

    function logoutsuccess() {
        Swal.fire({
            title: 'ออกจากระบบสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
        }).then(function() {
            window.location = "../index.php";
        });
    }

    function pay_dept_success() {
        Swal.fire({
            title: 'ชำระเงินสำเร็จ',
            text: 'สามารถตรวจสอบการจองได้ที่เมนูจัดการการจอง',
            icon: 'success',
            confirmButtonText: "ตกลง",
        }).then(function() {
            window.location = "../users-merchant/rent.php";
        });
    }

    function delsuccess() {
        Swal.fire({
            title: 'ลบข้อมูลสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        })
    }


    function delbannersuccess() {
        Swal.fire({
            title: 'ลบข้อมูลสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
        }).then(function() {
            window.location = "../users-admin/banner.php";
        });
    }

    function delsuccessmarket() {
        Swal.fire({
            title: 'ลบข้อมูลสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
        }).then(function() {
            window.location = "../users-market/index.php";
        });
    }

    function signUPsuccess() {
        Swal.fire({
            title: 'ลงทะเบียนสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        })
    }

    function Approvesuccess() {
        Swal.fire({
            title: 'อนุมัติคำร้องเสร็จสิ้น',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "../users-admin/partner.php";
        });
    }

    function Deninedsuccess() {
        Swal.fire({
            title: 'ยกเลิกคำร้องเสร็จสิ้น',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "../users-admin/partner.php";
        });
    }

    function ApprovesuccessAN() {
        Swal.fire({
            title: 'อนุมัติคำร้องเสร็จสิ้น',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "../users-admin/annouce.php";
        });
    }

    function DeninedsuccessAN() {
        Swal.fire({
            title: 'ยกเลิกคำร้องเสร็จสิ้น',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "../users-admin/annouce.php";
        });
    }

    function cancelsuccess() {
        Swal.fire({
            title: 'ยกเลิกการจองสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "../users-merchant/rent.php";
        });
    }

    function sentinvoice() {
        Swal.fire({
            title: 'ส่งใบแจ้งค่าเช่าสำเร็จ',
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        });
    }
    // error------------------------------------------------------------

    function errorpay() {
        Swal.fire({
            title: 'ผิดพลาด',
            text: 'เกิดข้อผิดพลาดกรุณาลองอีกครั้ง',
            icon: 'error',
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

    function dberror() {
        Swal.fire({
            title: 'ผิดพลาด',
            text: 'เชื่อมต่อฐานข้อมูลไม่สำเร็จ',
            icon: 'error',
            showConfirmButton: false,
            timer: 2500
        })
    }

    function autherror() {
        Swal.fire({
            title: 'กรุณาตรวจสอบอีกครั้ง',
            text: 'บัญชีผู้ใช้งาน หรือ รหัสผ่านของคุณไม่ถูกต้อง',
            icon: 'error',
            showConfirmButton: false,
            timer: 1000
        }).then(function() {
            window.location = "./index.php";
        });
    }
    // warning------------------------------------------------------------
    function signIn() {
        document.getElementById("profilebar").style.right = "0";
        document.getElementById("signIn").style.display = "block";
        document.getElementById("forgotpsw").style.display = "none";
        document.getElementById("signUp").style.display = "none";
        document.getElementById("profilebar").style.transition = "0.5s ease";

    }

    function plslogin() {
        Swal.fire({
            title: 'คุณยังไม่ได้เข้าสู่ระบบ',
            text: 'กรุณาเข้าสู่ระบบเพื่อดำเนินการต่อ',
            icon: 'warning',
            showConfirmButton: false,
            timer: 3000
        }).then(signIn(event))
    }

    function stalldoubly() {
        Swal.fire({
            title: 'มีรหัสแผงค้านี้ในตลาดแล้ว',
            icon: 'warning',
            showConfirmButton: false,
            timer: 3000
        })
    }


    function username_doubly() {
        Swal.fire({
            title: 'ชื่อผู้ใช้ซ้ำ',
            icon: 'warning',
            text: 'กรุณาเปลี่ยนชื่อผู้ใช้',
            showConfirmButton: false,
            timer: 3000
        })
    }


    function resetpws_success() {
        Swal.fire({
            title: 'รีเซ็ตรหัสผ่านเรียบร้อย',
            icon: 'success',
            showConfirmButton: false,
            timer: 3000,
            footer: '<a href="../index.php">เข้าสู่ระบบ</a>'
        })
    }

    function send_email() {
        Swal.fire({
            title: 'Send Email success',
            icon: 'success',
            showConfirmButton: true,
            timer: 3000
        })
    }
</script>

</html>