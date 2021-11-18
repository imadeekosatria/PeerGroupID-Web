<?php $session = session();?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/assets/css/admin.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="path-to/bootstrap.min.css">
  <!-- Bootstrap DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="path-to/dataTables.bootstrap.css">
  <!-- Jquery -->
  <script type="text/javascript" language="javascript" src="path-to/jquery-1.10.2.min.js"></script>
  <!-- Jquery DataTables -->
  <script type="text/javascript" language="javascript" src="path-to/jquery.dataTables.min.js"></script>
  <!-- Bootstrap Javascript -->
  <script type="text/javascript" language="javascript" src="path-to/dataTables.bootstrap.js"></script>
  <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
  <title><?=$title?></title>
</head>
<body>
  <div class="sidenav">

    <div class="img-sidebar">
      <img src="/assets/images/Logo Peer Group Transparan.png" alt="" class="img">
    </div>

    <a href="<?php echo base_url('artikel-admin'); ?>">Artikel</a>
    <a href="<?php echo base_url('kegiatan-admin'); ?>">Kegiatan</a>
    <a href="<?php echo base_url('profile'); ?>">#CeritaMereka</a>
    <a href="<?php echo base_url('profile'); ?>">Review</a>
    <a href="<?php echo base_url('profile'); ?>">Profil</a>
    <a href="<?php echo base_url(); ?>">Beranda</a>

  </div>

  <div class="main">
      <div class="header">
          <p><?php echo $session->name?></p>

          <img src="/assets/images/profile/default.png" alt="" class="img-user">
          <a href="<?php echo base_url('logout')?>"><img src="/assets/images/input.png" alt="" class="img-input"></a>
      </div>

      <?= $this->renderSection('content');?>  
  </div>
    <!-- Panggil Fungsi -->
  <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
    $('.table-paginate').dataTable();
  } );
  </script>
</body>
</html> 
