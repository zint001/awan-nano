
<!DOCTYPE html>
<html lang="en">

<head>
<?php echo view("_partial/head.php") ?>
</head>

<body id="page-top">


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php echo view("_partial/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- jquery -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>

      <!-- popper js -->
      <script src="https://unpkg.com/@popperjs/core@2"></script>

      <!-- bootstrap -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.semanticui.min.css">

      <!-- Bootbox -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

      <!-- datatable -->
      <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
      <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  
      
   <!-- Main Content -->

   <div id="content">

    <!-- Topbar -->
    <?php echo view("_partial/topbar.php") ?>
    <!-- End of Topbar -->

    <?php
  $session = \Config\Services::session(); //to enable access to here.php session
?>
<!-- Session Tambah Program -->
<?php if (isset($session->add)): ?>
  <div class="container"> 
    <div class="alert bg-success rounded text-center" role="alert">
    <strong class="text-light">PROGRAM BARU BERJAYA DITAMBAH!</strong>
    </div>
  </div>

<script>window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(300, function(){
        $(this).remove(); 
    });
}, 2000);</script>
<?php endif; ?>

<!-- Session Delete Program -->
<?php if (isset($session->delete)): ?>
  <div class="container"> 
    <div class="alert bg-success rounded text-center" role="alert">
    <strong class="text-light">PROGRAM BERJAYA DIPADAM!</strong>
    </div>
  </div>

<script>window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(300, function(){
        $(this).remove(); 
    });
}, 2000);</script>
<?php endif; ?>

<div class="container">
	<div class="card shadow row col-md-20">
            <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary ">SENARAI PROGRAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           &nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-info btn-md btn-right" onclick= "document.location.href = '<?php echo site_url('/addEvent'); ?>'">Tambah Program Baru</button></h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="ui celled table" id="meja" width="100%" cellspacing = "0" >
                  <thead>
			<tr>
				<th>ID.</th>
				<th>TAJUK</th>
				<th>TARIKH & MASA</th>
				<th>TARIKH TUTUP PENDAFTARAN</th>
				<th>SASARAN</th>
				<th>DIREKOD PADA</th>
				<th>DIREKOD OLEH (NRIC)</th>
				<th>LOKASI</th>
        <th>KETERANGAN</th>
				<th>KEMASKINI</th>
 			

			</tr>
		</thead>
		<tbody>	
				<?php //if($program): ?>
        <?php foreach($program as $blog): ?>
        <tr>
				<td><?php echo $blog->id; ?></td>
				<td><?php echo $blog->tajuk; ?></td>	
				<td><?php echo $blog->mstkh; ?></td>
				<td><?php echo $blog->tkhtutup; ?></td>
				<td><?php echo $blog->sasaran; ?></td>
				<td><?php echo $blog->rekodpada; ?></td>
				<td><?php echo $blog->oleh; ?></td>
				<td><?php echo $blog->tempat; ?></td>
        <td><?php echo $blog->keterangan; ?></td>
        <td>
          <a href="<?php echo base_url(); ?>/home/updateEvent/<?php echo $blog->id; ?>" class="btn btn-md btn-success"><i class="fa fa-edit"></i> </a>
          &nbsp;
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-trash"></i></button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                Adakah anda ingin memadamkan program ini?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                  <button type="button" onclick="document.location.href ='<?php echo site_url(); ?>home/deleteEvent/<?php echo $blog->id; ?>'" class="btn btn-danger" >Ya</button>
                </div>
              </div>
            </div>
          </div>
          

        </td>	
				</tr>				
				<?php endforeach; ?>
				<?php //endif; ?>	

		</tbody>  
	</table>	
	
	<script>
		table = $('#meja').DataTable({
      "order": [[0, "desc"]]
    });
  </script>
  
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

	</div>
</div>
</div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded btn-primary" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php echo view("_partial/logout.php") ?>

</body>

<footer>
  <?php echo view("_partial/footer.php") ?>
</footer>

</html>
