<?php
include '../../../kontrol/tukangshare.php';
include '../../../koneksi.php';
$tanggal = date("Y-m-d");

$result = mysqli_query($koneksi, "SELECT listbooking.id_booking, listbooking.Nama, listbooking.no_hp, listbooking.alamat, listbooking.nopol, jm.jenis_montor, Jm_model.model, listbooking.Perbaikan,listbooking.Lainnya, listbooking.waktu FROM listbooking, jm, jm_model WHERE listbooking.id_jm=jm.id_jm and listbooking.id_model=jm_model.id_model ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include 'header.php'
?>


<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List Booking</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Booking Servise <?php echo date("d-m-Y"); ?>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th width="50px;">Nama</th>
                                <th width="70px;">No. HP</th>
                                <th width="70px;">Alamat</th>
                                <th width="90px;">No. Polisi</th>
                                <th width="80px;">J. Montor</th>
                                <th width="50px;">Model</th>
                                <th width="700px;">Perbaikan</th>
                                <th >Waktu</th>
                                <th width="140px;">Data</th>

                            </tr>
                            </thead>
                            <?php
                            while($user_data = mysqli_fetch_array($result)) {

                                echo "<tr>";
                                echo "<td>".$user_data['Nama']."</td>";
                                echo "<td>".$user_data['no_hp']."</td>";
                                echo "<td>".$user_data['alamat']."</td>";
                                echo "<td>".$user_data['nopol']."</td>";
                                echo "<td>".$user_data['jenis_montor']."</td>";
                                echo "<td>".$user_data['model']."</td>";
                                echo "<td>".$user_data['Perbaikan']," , ".$user_data['Lainnya']."</td>";
                                echo "<td>".$user_data['waktu']."</td>";
                                echo "<td><a href='edit-data.php?id=$user_data[id_booking]'>Edit</a> | <a href='delete.php?id=$user_data[id_booking]'>Delete</a></td></tr>";

                            }
                            ?>


                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
        <!-- /.row -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>


</body>
</html>
