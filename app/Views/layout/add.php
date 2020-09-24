
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <!-- bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity=
      "sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
      <!-- datatable -->
      <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
      <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  
      
   <!-- Main Content -->

   <div id="content">

    <!-- Topbar -->
    <?php echo view("_partial/topbar.php") ?>
    <!-- End of Topbar -->

<div class="container">
	<div class="card shadow mb-6">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-primary">TAMBAH PROGRAM BARU</h5>
            </div>
            <div class="card-body">

<div class="container">
<?php if($_POST): ?>
    <?= \Config\Services::validation()->listErrors(); ?>
<?php endif; ?>

  <?php

 helper('form');

   $session = \Config\Services::session();
   $mesej = $session->getFlashdata('error');
  if ($mesej != '') {
    echo "<div style='border-style: dashed;padding:5px;background-color:red;color:white;margin-bottom:10px'>";
  echo $mesej;
  echo "</div>";
}
  ?>

<form class action="<?= base_url('create')?>" method="post">

<div class="form-group">
  <label for="title"><strong>TAJUK:</strong></label>
  <input type="text" class="form-control font-italic" name="tajuk" id="tajuk" placeholder="E.g: Kursus Kewangan" value="" required>
</div>

<div class="form-group">
  <label for="title"><strong>MASA & TARIKH:</strong></label>
  <input type="datetime-local" class="form-control font-italic" name="mstkh" id="mstkh" value="" required>
</div>
<div class="form-group">
  <label for="title"><strong>TARIKH TUTUP PENDAFTARAN:</strong></label>
  <input type="date" class="form-control font-italic" name="tkhtutup" id="tkhtutup" value="" required>
</div>
<div class="form-group">
    <label for="title"><strong>SASARAN:</strong></label>

    <select class="font-italic" name="sasaran" id="sasaran">
      <option value="Staf">Staf</option>
      <option value="Pelajar">Pelajar</option>
      <option value="Staf & Pelajar">Staf & Pelajar</option>
    </select>
</div>
<div class="form-group">
  <label for="title"><strong>DIREKOD OLEH (NRIC):</strong></label>
  <input type="text" class="form-control font-italic" name="oleh" id="oleh" value="" minlength="14" maxlength="14" placeholder="E.g: 000712-11-0561" required>
</div>
<div class="form-group">
  <label for="title"><strong>TEMPAT:</strong></label>
  <input type="text" class="form-control font-italic" name="tempat" id="tempat" placeholder="E.g: Dewan Canselori" value="" required>
</div>
<div class="form-group">
  <label for="title"><strong>KETERANGAN:</strong></label>
  <textarea type="text" class="form-control font-italic" name="keterangan" id="keterangan" placeholder="E.g: Makanan disediakan, Pengangkutan percuma" value=""></textarea>
</div>
        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-md font-italic">Simpan</button>
          </div>
        </div>
    </form>



</div>
      </div>
    </div>
  </div>    

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded btn-primary" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

      <!-- End of Main Content -->

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

</body>

<footer>
  <?php echo view("_partial/footer.php") ?>
</footer>

</html>




