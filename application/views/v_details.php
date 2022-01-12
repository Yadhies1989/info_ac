<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="150;url=<?php echo base_url('testing') ?>">
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

<body class="hold-transition">
  <div class="container mt-5 col-10">
    <div class="card card-success">
      <div class="card-header">
        <?php
        foreach ($dataumum as $hasil) :
        ?>
          <div class="d-flex justify-content-between">
            <h4>Informasi Detail Perkara <?php echo $hasil['nomor_perkara'] ?></h4>
            <a href="<?php echo base_url('testing') ?>" class="btn btn-primary"><i class="fas fa-backspace nav-icon"></i> K e m b a l i</a>
          </div>

      </div>
      <div class="card-body">
        <!-- batas atas -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#dataumum" data-toggle="tab">Data Umum</a></li>
                <li class="nav-item"><a class="nav-link" href="#jadwalsidang" data-toggle="tab">Jadwal Sidang</a></li>
                <li class="nav-item"><a class="nav-link" href="#biayaperkara" data-toggle="tab">Biaya Perkara</a></li>
                <li class="nav-item"><a class="nav-link" href="#aktacerai" data-toggle="tab">Akte Cerai</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="dataumum">
                  <!-- Post -->
                  <div class="container" align="center">
                    <div class="card card col-6">

                      <div class="table-responsive">
                        <table class="table table-bordered table-striped col-12 mt-3 mb-3" align="center">
                          <tbody>

                            <tr>
                              <td class="table-primary" width="200px"><strong>Tanggal Pendaftaran</strong></td>
                              <td><?php echo tanggal_indonesia_lengkap($hasil['tanggal_pendaftaran']); ?></td>
                            </tr>
                            <tr>
                              <td class="table-primary"><strong>Nomor Perkara</strong></td>
                              <td><?php echo $hasil['nomor_perkara']; ?></td>

                            </tr>
                            <tr>

                              <td class="table-primary"><strong>Klasifikasi Perkara</strong></td>
                              <td><?php echo $hasil['jenis_perkara_text']; ?></td>
                            </tr>
                            <tr>
                              <td class="table-primary"><strong>Penggugat / Pemohon</strong></td>
                              <td><?php echo $hasil['pihak1_text']; ?></td>

                            </tr>
                            <tr>

                              <td class="table-primary"><strong>Tergugat / Termohon</strong></td>
                              <td><?php echo $hasil['pihak2_text']; ?></td>
                            </tr>

                          <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>


                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="biayaperkara">
                  <!-- The timeline -->
                  <!-- <table class="table table-bordered" align="center" style="text-align: center;height: 200px;"> -->
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead style="text-align: center;">
                        <tr>
                          <th scope="col" rowspan="2">No</th>
                          <th scope="col" rowspan="2">Tanggal Transaksi</th>
                          <th scope="col" rowspan="2">Uraian</th>
                          <th scope="col" colspan="3">Jumlah</th>
                          <th scope="col" rowspan="2">Keterangan</th>
                        </tr>
                        <tr>
                          <th scope="col">Pemasukan</th>
                          <th scope="col">Pengeluaran</th>
                          <th scope="col">Sisa</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $no     = 1;
                        $sisa   = 0;
                        $debet  = 0;
                        $kredit = 0;

                        foreach ($biaya as $hasil) :
                          if ($hasil['jenis_transaksi'] == 1) {
                            $sisa   = $sisa + $hasil['jumlah'];
                            $debet  = $debet + $hasil['jumlah'];
                          } elseif ($hasil['jenis_transaksi'] == -1) {
                            $sisa   = $sisa - $hasil['jumlah'];
                            $kredit = $kredit + $hasil['jumlah'];
                          }
                        ?>
                          <tr>
                            <td width="20px"><?php echo $no++ ?></td>
                            <td><?php echo tanggal_indonesia_lengkap($hasil['tanggal_transaksi']); ?></td>
                            <td><?php echo $hasil['uraian']; ?></td>
                            <td>
                              <?php if ($hasil['jenis_transaksi'] == 1) : ?>
                                Rp. <?php echo number_format($hasil['jumlah'], 0, ',', '.'); ?>
                              <?php endif ?>
                            </td>
                            <td style="text-align: justify;">
                              <?php if ($hasil['jenis_transaksi'] == -1) : ?>
                                Rp. <?php echo number_format($hasil['jumlah'], 0, ',', '.'); ?>
                              <?php endif ?>
                            </td>
                            <td>Rp. <?php echo number_format($sisa, 0, ',', '.') ?></td>
                            <td><?php echo $hasil['keterangan'] ?></td>
                          </tr>

                        <?php endforeach; ?>
                        <tr>
                          <?php foreach ($total as $hasil) :  ?>
                            <td scope="col" colspan="3">Total</td>
                            <td>Rp. <?php echo number_format($hasil['pemasukan'], 0, ',', '.') ?></td>
                            <td>Rp. <?php echo number_format($hasil['pengeluaran'], 0, ',', '.') ?></td>
                          <?php endforeach; ?>
                          <td>Rp. <?php echo number_format($sisa, 0, ',', '.') ?></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="jadwalsidang">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="example1">
                      <thead align="center">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Jam Sidang</th>
                          <th scope="col">Agenda Sidang</th>
                          <th scope="col">Ruang</th>

                        </tr>
                      </thead>
                      <tbody align="center">
                        <?php
                        $no = 1;
                        foreach ($jadwal as $hasil) :
                        ?>
                          <tr>
                            <td width="20px"><?php echo $no++ ?></td>
                            <td><?php echo tanggal_indonesia_lengkap($hasil['tanggal_sidang']); ?></td>
                            <td>Pukul <?php echo $hasil['jam_sidang']; ?> WIB</td>
                            <td><?php echo $hasil['agenda']; ?></td>
                            <td><?php echo $hasil['ruangan']; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="aktacerai">
                  <!-- Post -->
                  <div class="container" align="center">
                    <div class="card card col-6">
                      <!--  <div class="card-header">
                              <h2>DATA UMUM</h2>
                            </div> -->
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped col-12 mt-3 mb-3" align="center">
                          <tbody>
                            <?php
                            foreach ($aktacerai as $hasil) :
                            ?>
                              <tr>
                                <td class="table-primary" width="200px"><strong>Nomor Akta Cerai</strong></td>
                                <td><?php echo $hasil['nomor_akta_cerai']; ?></td>
                              </tr>
                              <tr>
                                <td class="table-primary"><strong>Tanggal Akta Cerai</strong></td>
                                <td><?php echo tanggal_indonesia_lengkap($hasil['tgl_akta_cerai']); ?></td>

                              </tr>
                              <tr>

                                <td class="table-primary"><strong>No Seri Akta Cerai</strong></td>
                                <td><?php echo $hasil['no_seri_akta_cerai']; ?></td>
                              </tr>
                              <tr>
                                <td class="table-primary"><strong>Jenis Cerai</strong></td>
                                <td><?php echo $hasil['jenis_cerai']; ?></td>

                              </tr>


                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- batas bawah -->
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