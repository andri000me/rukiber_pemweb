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
  </div>
</nav>

  <div class="box">
    <h2 style="text-align: center; padding-top: 10px;">BOOKING DOKTER</h2>
    <br>
    <table class="table table-striped" id="table" border="2">
      <thead class="thead-dark" style="text-align: center;">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama Dokter</th>
          <th>Spesialis</th>
          <th>Hari Praktik</th>
          <th>Tanggal Praktik</th>
          <th>Jam Praktik</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      
          <?php $i = 0;?>
          <tr>
          <?php foreach($dataPesanDokter as $row) { ?>
            <td><?=++$i?></td>
            <td><?=$row['foto']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['spesialis']?></td>
            <td><?=$row['hari_praktik']?></td>
            <td><?=$row['tanggal_praktik']?></td>
            <td><?=$row['jam_praktik']?></td>
            <td style="text-align: center;">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pesan<?=$row['kode_dokter']?>">Booking</button>
            <div class="modal fade" id="pesan<?=$row['kode_dokter']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form action="<?=site_url('pasdok/pesanDokter')?>" method="post">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Pesan Dokter <?=$row['nama']?></h5>
                    </div>
                    <div class="modal-body">        
                      <div class="form-group">
                        <label>Kode Dokter</label>                            
                        <input type="text" class="form-control" name="kode_dokter" value="<?=$row['kode_dokter']?>">
                      </div>
                    <div class="modal-body">
                      <h6>Klik Submit untuk pesan</h6>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
        </tr>
        <?php }?>
        </tbody>
    </table>
  </div>

  <div>
  <h2 style="text-align: center; margin-top:60px;">BOOKING DOKTER SAYA</h2>
      <br><br>
      <table class="table table-striped" id="table" border="2">
        <thead class="thead-dark" style="text-align: center;">
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
            <th>Hari Praktik</th>
            <th>Tanggal Praktik</th>
            <th>Jam Praktik</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 0;?>
          <tr>
          <?php foreach($dataBooking as $row) { ?>
            <td><?=++$i?></td>
            <td><?=$row['foto']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['spesialis']?></td>
            <td><?=$row['hari_praktik']?></td>
            <td><?=$row['tanggal_praktik']?></td>
            <td><?=$row['jam_praktik']?></td>
            <td>
              <a style="margin-left: 30px;" type="button" class="btn btn-danger"  href="<?=base_url()?>pasdok/hapus/<?=$row['kode_booking']?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a>
            </td>
          </tr>
        <?php }?>
        </tbody>
      </table>
  </div>
