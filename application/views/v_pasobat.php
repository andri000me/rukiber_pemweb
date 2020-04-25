<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<title>Pemesanan Obat</title>
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

  <div style="padding-right: 100px; padding-left: 100px;">
    <div class="box">
      <h2 style="text-align: center;">PEMESANAN OBAT</h2>
      <br><br>
      <table class="table table-striped" id="table" border="2">
        <thead class="thead-dark" style="text-align: center;">
          <tr>
            <th>No</th>
            <th>foto</th>
            <th>Nama Obat</th>
            <th>Kategori Obat</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            <!--ini contoh aja buat isi tabel, nanti dihapus-->
            <?php $i = 0;?>
            <?php foreach($dataPesanObat as $row) { ?>
              <tr>
                <td><?=++$i?></td>
                <td><?=$row['foto']?></td>
                <td><?=$row['namaobat']?></td>
                <td><?=$row['kategoriobat']?></td>
                <td><?=$row['keterangan']?></td>
                <td><?=$row['harga']?></td>
                <td><?=$row['stockobat']?></td>
                <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pesan<?=$row['kode_obat']?>">Pesan</button>

                  <div class="modal fade" id="pesan<?=$row['kode_obat']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="<?=site_url('pasobat/pesanobat')?>" method="post">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Pesan <?=$row['namaobat']?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">        
                          <div class="form-group">
                            <label>Kode Obat</label>                            
                            <input type="text" class="form-control" name="kode_obat" value="<?=$row['kode_obat']?>">
                          </div>
                          <div class="form-group">
                            <label>Pesan berapa?</label>                            
                            <input type="number" class="form-control" name="jumlah_pesanan_obat" placeholder="10">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Pesan!</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php } ?>
        </tbody>
      </table>

      <h2 style="text-align: center; margin-top:60px;">PESANAN OBAT SAYA</h2>
      <br><br>
      <table class="table table-striped" id="table" border="2">
        <thead class="thead-dark" style="text-align: center;">
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Obat</th>
            <th>Kategori Obat</th>
            <th>Keterangan</th>
            <th>Jumlah Pesanan</th>
            <th>Total Harga</th>
            <th style="text-align: center;" width="200">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 0;?>
            <?php foreach($dataPesanan as $row) { ?>
              <tr>
                <td><?=++$i?></td>
                <td><?=$row['foto']?></td>
                <td><?=$row['namaobat']?></td>
                <td><?=$row['kategoriobat']?></td>
                <td><?=$row['keterangan']?></td>
                <td><?=$row['jumlah_pesanan_obat']?></td>
                <td><?=$row['harga'] * $row['jumlah_pesanan_obat']?></td>
                <td>
                <button style="margin-left: 10px;" type="button" class="btn btn-warning" data-toggle="modal" data-target=" #edit<?=$row['kode_pesan']?>">Ubah</button>
                <a style="margin-left: 30px;" type="button" class="btn btn-danger"  href="<?=base_url()?>pasobat/hapus/<?=$row['kode_pesan']?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a>

              </td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
  </div>

<!-- Modal Pesan Obat -->

  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <?php echo form_open_multipart('Pasobat/pesanobat');?>
        <div class="modal-header">
        <center><h2>Pemesanan Obat</h2></center>
        </div>
        <div class="modal-body">
        <form method="post" action="<?php echo base_url() ?>index.php/Pasobat/pesanobat">
        <div class="form-group">
            <label for="stockobat">Jumlah Obat yang Dipesan</label>
            <br>
            <input type="number" class="number" id="jumlah_pesanan_obat" name="jumlah_pesanan_obat"required>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        <?php echo form_close(); ?>
        </form>
      </div>
    </div>
  </div>

<!-- Modal Edit -->
<?php foreach($dataPesanan as $row) { ?>
  <div class="modal fade" id="edit<?=$row['kode_pesan']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Pemesanan Obat</h2></center>
        </div>
        <div class="modal-body">
        <form method="post" action="<?php echo base_url() ?>index.php/Pasobat/ubah/<?=$row['kode_pesan']?>">
        <div class="form-group">
            <label for="stockobat">Jumlah Obat yang Dipesan</label>
            <br>
            <input type="number" class="number" id="jumlah_pesanan_obat" name="jumlah_pesanan_obat"required value="<?=$row['jumlah_pesanan_obat']?>">
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>