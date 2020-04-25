<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<title>Halaman Obat</title>
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
        <a type="button" class="btn btn-success"  href="<?= base_url(); ?>admin/dashboard" >Kembali</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari" name="keyword">
      <button class="btn btn-success my-2 my-sm-0" type="submit" >Cari</button>
    </form>
  </div>
</nav>

    <div class="box">
      <h2 style="text-align: center;">DAFTAR DATA OBAT</h2>
      <br><br>
      <table class="table table-striped" id="table" border="2">
        <thead class="thead-dark" style="text-align: center;">
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Kode Obat</th>
            <th width="150">Nama obat</th>
            <th>Kategori Obat</th>
            <th width="200">Keterangan</th>
            <th width="100">Harga Obat</th>
            <th>Stock Obat</th>
            <th style="text-align: center;" width="200">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0;?>
            <tr>
            <?php foreach($tbl_obat as $row) { ?>
              
            <form action="">
              <td><?=++$i?></td>
            <td><img src="<?=base_url('upload/obat/')?><?=$row['foto']?>" alt=""></td>
              <td><?=$row['kode_obat']?></td>
              <td><?=$row['namaobat']?></td>
              <td><?=$row['kategoriobat']?></td>
              <td><?=$row['keterangan']?></td>
              <td><?=$row['harga']?></td>
              <td><?=$row['stockobat']?></td>
              <!--Button Aksi-->
              <td>
                <button style="margin-left: 10px;" type="button" class="btn btn-warning" data-toggle="modal" data-target=" #edit<?=$row['kode_obat']?>">Ubah</button>
                <a style="margin-left: 30px;" type="button" class="btn btn-danger"  href="<?=base_url()?>obat/hapus/<?=$row['kode_obat']?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a>

              </td>
              </tr>
            </form>
            <?php } ?>
        </tbody>
      </table>
      <br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">Tambah Data Obat</button>
    </div>
  </div>
  <!-- Modal Tambah Obat -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php echo form_open_multipart('Obat/tambah_action');?>
      <div class="modal-header">
      <center><h2>TAMBAH DATA OBAT</h2></center>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?php echo base_url() ?>index.php/Obat/tambah_action">
        <div class="form-group">
          <label for="foto">Unggah</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="foto" name="foto">
            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
          </div>
        </div>
        <div class="form-group">
          <label for="namaobat">Nama Obat</label>
          <input type="text" class="form-control" id="namaobat" name="namaobat" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Kategori Obat</label>
          <br>
          <select id="kategoriobat" class="dropdown" name="kategoriobat">
            <option value="">----- Pilih -----</option>
            <option value="tablet">Tablet</option>
            <option value="kapsul">Kapsul</option>
            <option value="cair">Cair</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Keterangan">Keterangan</label>
          <textarea class="form-control" id="keterangan" name="keterangan" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <br>
            <input type="text" class="form-control" id="harga" name="harga"required>
        </div>
        <div class="form-group">
            <label for="stockobat">Stock Obat</label>
            <br>
            <input type="number" class="number" id="stockobat" name="stockobat"required> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        <?php echo form_close(); ?>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Obat -->

<?php foreach($tbl_obat as $row) { ?>
  <div class="modal fade" id="edit<?=$row['kode_obat']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Data Obat</h2></center>
        </div>
        <div class="modal-body">

        <form method="post" action="<?php echo base_url() ?>index.php/Obat/ubah/<?=$row['kode_obat']?>">

        <div class="form-group">
          <label for="namaobat">Nama Obat</label>
          <input type="text" class="form-control" id="namaobat" name="namaobat" required value="<?=$row['namaobat']?>" >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Kategori Obat</label>
          <br>
          <select id="kategoriobat" class="dropdown" name="kategoriobat">
            <option value="">----- Pilih -----</option>
            <option value="tablet">Tablet</option>
            <option value="kapsul">Kapsul</option>
            <option value="cair">Cair</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Keterangan">Keterangan</label>
          <textarea class="form-control" id="keterangan" name="keterangan" rows="2" required value="<?=$row['keterangan']?>"></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <br>
            <input type="text" class="form-control" id="harga" name="harga"  required value="<?=$row['harga']?>">
        </div>
        <div class="form-group">
            <label for="stockobat">Stock Obat</label>
            <br>
            <input type="number" class="number" id="stockobat" name="stockobat" required value="<?=$row['stockobat']?>">
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
<script>
  $(document).ready( function () {
    $('#table').DataTable();
  } );
</script>