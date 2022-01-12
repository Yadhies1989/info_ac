<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="150;url=https://www.pa-bojonegoro.go.id/">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Icon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/akta.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets//dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
</head>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>INFO AC | </b>PA BJN</a>
    </div>
    <!-- /.login-logo -->
  </div>
  <div class="container">
    <div class="card">
      <form action="<?php echo base_url('welcome') ?>" method="post">
        <div class="card-body">
          <div align="center">
            <h4>Contoh : 1234/Pdt.G/2020/PA.Bjn</h4>
          </div>
          <div class="input-group">
            <label for="cari_perkara" class="col-sm-2 col-form-label">Nomor Perkara:</label>
            <input type="text" class="form-control col-sm-3" name="nomor" placeholder="Nomor" value="<?= set_value('nomor') ?>" required oninvalid="this.setCustomValidity('Nomor Perkara Wajib Diisi')" oninput="setCustomValidity('')">
            <input type="text" class="form-control col-sm-3" name="jenis_perkara" value="Pdt.G" readonly>
            <select name="tahun" class="form-control col-sm-3" required>
              <?php foreach ($tahun as $hasil) { ?>
                <option value="<?php echo $hasil['tahun_baru']; ?>"><?php echo $hasil['tahun_baru']; ?> </option>
              <?php } ?>
            </select>
            <input type="text" class="form-control col-sm-3" name="nama_pa" value="PA.Bjn" readonly>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          </div>
        </div>
        <div class="card-footer d-flex flex-row-reverse bd-highlight">
          <button type="submit" class="btn btn-success btn-flat"><i class="fas fa-search"></i> T A M P I L K A N</button>
        </div>
      </form>
    </div>
  </div>




  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets//plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets//dist/js/adminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.all.js"></script>

  <script type="text/javascript">
    const flashData = $('.flash-data').data('flashdata');
    //console.log(flashData);
    if (flashData) {
      Swal.fire({
        icon: 'success',
        title: 'Good Job',
        text: 'Data Berhasil ' + flashData,
      });
    }
  </script>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#myModal').modal('show');
    });
  </script>
</body>

</html>
<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Info Akta Cerai PA BJN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="text-center text-danger">Selamat Datang Di Aplikasi Info Akta Cerai Pengadilan Agama Bojonegoro</h4>
        <br>
        <p class="text-center">Aplikasi Info Akta Cerai memberikan kemudahan anda dalam melakukan pengecekan terhadap dokumen akta cerai. Jika data yang anda cari tidak ditemukan, mohon untuk menghubungi Pengadilan Agama Bojonegoro terkait untuk memastikan kembali validitas datanya. Data yang disajikan disini adalah data tahun <span class="text-danger">2018</span> keatas.
        </p>
      </div>
      <div class="modal-footer">
        <p>Tim IT PA Bojonegoro 2021</p>
      </div>
    </div>
  </div>
</div>
<!-- endModal -->