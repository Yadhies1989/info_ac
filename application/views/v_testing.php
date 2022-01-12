<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
      <a href="#"><b>A T M | </b>PA BJN</a>
    </div>
    <!-- /.login-logo -->
  </div>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div align="center">
          <h2>Contoh : 1234/Pdt.G/2020/PA.Bjn</h2>
        </div>

        <div class="input-group">
          <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nomor Perkara</label>
          <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Input Nomor Perkara : Contoh : 1234/Pdt.G/2020/PA.Bjn ">
          <span class="input-group-append">
            <button type="submit" class="btn btn-success btn-flat"><i class="fas fa-search"></i> T A M P I L K A N</button>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Perkara</th>
                <th scope="col">Penggugat</th>
                <th scope="col">Tergugat</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
            <tbody>
              <!-- <?php
                    $no = 1;
                    foreach ($laporan as $hasil) :
                    ?>
                <tr>
                  <td width="20px"><?php echo $no++ ?></td>
                  <td><?php echo $hasil['nomor_perkara']; ?></td>
                  <td><?php echo $hasil['pihak1_text']; ?></td>
                  <td><?php echo $hasil['pihak2_text']; ?></td> 
                  <td width="150px">
                    <a  href="<?php echo base_url('welcome/details/') . $hasil['perkara_id']; ?>" class="btn btn-primary"><i class="fas fa-clipboard"></i> D e t a i l s</a>
                  </td>               
                </tr>
            <?php endforeach; ?> -->
            </tbody>
          </table>
        </div>
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

    <script>
      const namaMenu = $('.nama-menu').data('namamenu');
      // console.log(namaLengkap);

      if (namaMenu) {
        Swal.fire({
          icon: 'warning',
          title: 'Cek Kembali',
          text: namaMenu,
        });
      }
    </script>

</body>

</html>