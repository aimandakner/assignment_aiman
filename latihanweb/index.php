<?php
    session_start();     
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>Maklumat Pelajar</title>

	
    <link rel="stylesheet" type="text/css"href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text\css"href="DataTables\css\dataTables.bootstrap5.min.css">

    <!-- link boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body >
    <!-- php butang rekod -->
    <?php  include('add_modal.php') ?>

     <!-- tajuk -->
     <h2 style="text-align:center">Sistem Maklumat Pelajar</h2>

        <!-- content start -->
        <div class="container-sm">
        
        <!--  -->
        <div class="row">
            <?php
                if(isset($_SESSION['success'])){
                    echo 
                    "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                     Data Berjaya Disimpan.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }
                if(isset($_SESSION['danger'])){
                    echo 
                    "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                     Data Tidak Berjaya Disimpan.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                }
            ?>
        </div>

        <!-- Butang Rekod Baru -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        Rekod Baru </button>
        
        <!-- <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#edit_'>
        Edit
        </button>  -->
        <br>
        <br>

        <div class="container-sm">
				<div class="demo-html">
					<table id="example" class="table table-striped" style="width:100%">
						<thead>
							<tr>
                            <th>Bil</th>
                            <th>Nama</th>
							<th>Emel</th>
							<th>Nombor Telefon</th>
							<th>Program</th>
                            <th>Sesi</th>
                            <th>Tindakan</th>
						</tr>
					</thead>
				<tbody>

                        <!-- php connection -->
                        <?php  include('connection.php');
                        $sql = "SELECT * FROM pelajar"; //panggil table pelajar

                        $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                echo
                                "<tr>
                                    <td> ".$row['id']."</td>
                                    <td> ".$row['nama']."</td>
                                    <td> ".$row['emel']."</td>
                                    <td> ".$row['notel']."</td>
                                    <td> ".$row['program']."</td>
                                    <td> ".$row['sesi']."</td>
                                    <td> "."</td>
                                    <td>
                                    <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#edit_".$row['id']."'><i class='bi bi-pencil-fill'></i></button> 
                                    
                                    <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#delete_".$row['id']."'><i class='bi bi-trash3-fill'></i></button>
                                    </td>
                                    

                                    
                                </tr>";
                                include('edit_delete_modal.php') ;
                            }
                        ?> 
						
                            
						</tbody>
						<tfoot>
							<tr>
                            <th>Bil</th>
                                 <th>Nama</th>
								<th>Emel</th>
								<th>Nombor Telefon</th>
								<th>Program</th>
                                <th>Sesi</th>
                                <th>Tindakan</th>
                                
							</tr>
						</tfoot>
					</table>
				</div>
                </div>
			</div>
</body>
<!--datatables and JQuery JS-->
    <script src="jquery\jquery-3.6.1.js"></script>
    <script src="DataTables-1.12.1\js\jquery.dataTables.min.js"></script>
    <script src="DataTables-1.12.1\js\dataTables.bootstrap5.min.js"></script>	
    <script src="bootstrap\js\bootstrap.bundle.min.js"></script>

    <!--datatables script-->
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                order:[[0, 'desc']],
            });
        });
    </script>
</html>