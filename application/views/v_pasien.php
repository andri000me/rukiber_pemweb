<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<title>Halaman Pasien</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.css') ?>">
  <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/js/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/all.min.js') ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>" >
<?= base_url(); ?>admin/dashboard
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a type="button" class="btn btn-success"  href="<?= base_url(); ?>admin/dashboard" >Kembali</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Cari</button>
    </form>
  </div>
</nav>

  <div class="container">
  	<div class="box">
      <h2 style="text-align: center;"> DAFTAR DATA PASIEN</h2>
      <br><br>
      <table class="table table-bordered" id="table">
        <thead class="thead-dark" style="text-align: center;">
          <tr>
            <th>No</th>
            <th>Kode Pasien</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Nomor Handphone</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;?>
            <tr>
            <?php foreach($tbl_pasien as $row) { ?>
              
            <form action="">
              <td><?=++$i?></td>
              <td><?=$row['nama_pasien']?></td>
              <td><?=$row['umur']?></td>
              <td><?=$row['jenis_kelamin']?></td>
              <td><?=$row['tempat_lahir']?></td>
              <td><?=$row['tanggal_lahir']?></td>
              <td><?=$row['no_hp']?></td>
              <td><?=$row['alamat']?></td>
              <!--Button Aksi-->
              <td>
                
                <button type="button" class="btn btn-danger"  href=" <?=base_url()?>pasienn/hapus/<?=$row['kode_pasien']?> " onClick="return confirm('Apakah Anda Yakin?')">Hapus</button>

              </td>
              </tr>
            </form>
            <?php } ?>
        </tbody>
      </table>
      <br>
    </div>
  </div>