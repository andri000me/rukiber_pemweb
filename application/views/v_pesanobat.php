<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<title>BOOKING DOKTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.css') ?>">
  <script type="text/javascript" charset="utf8" src="<?php echo base_url('assets/js/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/all.min.js') ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>" >

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a type="button" class="btn btn-success"  href="<?= base_url(); ?>pasien/dashboard" >Kembali</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  <div class="box">
    <h2 style="text-align: center; padding-top: 10px;">DAFTAR JAGA DOKTER</h2>
    <br>
    <table class="table table-striped" id="table" border="2">
      <thead class="thead-dark" style="text-align: center;">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama Obat</th>
          <th>Kategori Obat</th>
          <th>Keterangan</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
      
          <?php $i = 0;?>
          <tr>
          <?php foreach($tbl_dokter as $row) { ?>
            <td><?=++$i?></td>
            <td><?=$row['foto']?></td>
            <td><?=$row['namaobat']?></td>
            <td><?=$row['kategoriobat']?></td>
            <td><?=$row['keterangan']?></td>
            <td><?=$row['harga']?></td>
            <!--Button Aksi-->
          </tr>
        <?php }?>
        </tbody>
    </table>
  </div>