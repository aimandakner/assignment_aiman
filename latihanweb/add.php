<?php
session_start();
    include_once('connection.php');

    if(isset($_POST['add'])){
        $nama = $_POST['nama'];
        $emel = $_POST['emel'];
        $notel = $_POST['notel'];
        $program = $_POST['program'];
        $sesi = $_POST['sesi'];

//         $sql = "INSERT INTO pelajar (nama,emel,notel,program) VALUES ('$nama','$emel','$notel','$program')";

//         $rs=mysqli_query($conn,$sql);
//         // if($rs){
//         //     echo "something went wrong".mysqli_error($conn);
//         // }
//         if($conn->query($sql)){
//                 $_SESSION['success'] = 'Data Berjaya Disimpan';
//         }
//         else{
//             $_SESSION['error'] = 'Data Tidak Berjaya Disimpan';
//         }
//     }
//     else {
//         $_SESSION['error'] = 'Sila Semak Semula Data Yang Dimasukkan';
//     }

    $keputusan = mysqli_query($conn, "INSERT INTO pelajar(nama,emel,notel,program,sesi) VALUES('$nama','$emel','$notel','$program' ,'$sesi')");
    }
    header('location:index.php');

?>