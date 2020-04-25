<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<title>Halaman Dokter</title>
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
        <a type="button" class="btn btn-success"  href="<?= base_url(); ?>admin/dashboard">Kembali</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    </form>
  </div>
</nav>

  <div class="box">
    <h2 style="text-align: center; padding-top: 10px;">DAFTAR DATA DOKTER</h2>
    <br>
    <table class="table table-striped" id="table" border="2">
      <thead class="thead-dark" style="text-align: center;">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Umur</th>
          <th>Agama</th>
          <th width="100">No HP</th>
          <th>Spesialis</th>
          <th>No Izin Praktik</th>
          <th>Hari Praktik</th>
          <th>Tanggal Praktik</th>
          <th>Jam Praktik</th>
          <th style="text-align: center; width: 300px;">Aksi</th>
        </tr>
      </thead>
      <tbody>
      
          <?php $i = 0;?>
          <tr>
          <?php foreach($tbl_dokter as $row) { ?>
            <td><?=++$i?></td>
            <td><img src="<?=base_url('upload/dokter/')?><?=$row['foto']?>" alt=""></td>
            <td><?=$row['kode_dokter']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['jenis_kelamin']?></td>
            <td><?=$row['umur']?></td>
            <td><?=$row['agama']?></td>
            <td><?=$row['no_hp']?></td>
            <td><?=$row['spesialis']?></td>
            <td><?=$row['no_izin_praktik']?></td>
            <td><?=$row['hari_praktik']?></td>
            <td><?=$row['tanggal_praktik']?></td>
            <td><?=$row['jam_praktik']?></td>
            <!--Button Aksi-->
            <td style="text-align: center;">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$row['kode_dokter']?>">Ubah</button>

              <a style="margin-left: 10px;" type="button" class="btn btn-danger"  href="<?=base_url()?>dokter/hapus/<?=$row['kode_dokter']?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a>
            </td>
            </tr>
          </form>
        <?php } ?>  
          
      </tbody>
    </table>
    <br>
    <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">Tambah Data Dokter</button>
    </div>
  </div>
</div>

  <!-- Modal Tambah Dokter -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php echo form_open_multipart('Dokter/tambah_action');?>
      <div class="modal-header">
      <center><h2>Tambah Data Dokter</h2></center>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="foto">Unggah</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="foto" name="foto">
            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
          </div>
        </div>
        <div class="form-group">
          <label for="namadokter">Nama Dokter</label>
          <input type="text" class="form-control" id="namadokter" name="nama" required >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Jenis Kelamin</label>
          <br>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki">
            <label>Laki-Laki</label>
            <br>
            <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label>Perempuan</label>
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <br>
            <input type="number" class="number" id="umur" name="umur" required> 
        </div>
        <div class="form-group">
          <label for="agama">Agama</label>
          <input type="text" class="form-control" id="agama" name="agama" required >
        </div>
        <div class="form-group">
          <label for="nohp">No HP</label>
          <input type="text" class="form-control" id="no_hp" name="no_hp" required >
        </div>
        <div class="form-group">
          <label for="spesialis">Spesialis</label>
          <input type="text" class="form-control" id="spesialis" name="spesialis" required >
        </div>
        <div class="form-group">
          <label for="noizin">No Izin Praktik</label>
          <input type="text" class="form-control" id="no_izin_praktik" name="no_izin_praktik" required >
        </div>
        <div class="form-group">
          <label for="hari_praktik">Hari Praktik</label>
          <br>
            <input type="radio" name="hari_praktik" value="Senin">
            <label>Senin</label>
            <br>
            <input type="radio" name="hari_praktik" value="Selasa">
            <label>Selasa</label>
            <br>
            <input type="radio" name="hari_praktik" value="Rabu">
            <label>Rabu</label>
            <br>
            <input type="radio" name="hari_praktik" value="Kamis">
            <label>Kamis</label>
            <br>
            <input type="radio" name="hari_praktik" value="Jum'at">
            <label>Jum'at</label>
            <br>
            <input type="radio" name="hari_praktik" value="Sabtu">
            <label>Sabtu</label>
            <br>
            <input type="radio" name="hari_praktik" value="Minggu">
            <label>Minggu</label>
        </div>
        <div class="form-group">
          <label for="tanggal_praktik">Tanggal Praktik</label>
          <input type="date" class="form-control" id="tanggal_praktik" name="tanggal_praktik" required >
        </div>
        <div class="form-group">
          <label for="jam_praktik">Jam Praktik</label>
          <input type="time" class="form-control" id="jam_praktik" name="jam_praktik" required >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        <?php echo form_close(); ?>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Dokter -->
<?php foreach($tbl_dokter as $row) { ?>
  <div class="modal fade" id="edit<?=$row['kode_dokter']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Data Dokter</h2></center>
        </div>
        <div class="modal-body">

        <form method="post" action="<?php echo base_url() ?>index.php/Dokter/ubah/<?=$row['kode_dokter']?>">
        <div class="form-group">
          <label for="namadokter">Nama Doker</label>
          <input type="text" class="form-control" id="nama" name="nama" required value="<?=$row['nama']?>">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Jenis Kelamin</label>
          <br>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki">
            <label>Laki-Laki</label>
            <br>
            <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label>Perempuan</label>
        </div>
        
        <div class="form-group">
            <label for="umur">Umur</label>
            <br>
            <input type="number" class="number" id="umur" name="umur"required value="<?=$row['umur']?>"> 
        </div>
        <div class="form-group">
          <label for="agama">Agama</label>
          <input type="text" class="form-control" id="agama" name="agama" required value="<?=$row['agama']?>" >
        </div>
        <div class="form-group">
          <label for="nohp">No HP</label>
          <input type="text" class="form-control" id="no_hp" name="no_hp" required value="<?=$row['no_hp']?>">
        </div>
        <div class="form-group">
          <label for="spesialis">Spesialis</label>
          <input type="text" class="form-control" id="spesialis" name="spesialis" required value="<?=$row['spesialis']?>">
        </div>
        <div class="form-group">
          <label for="noizin">No Izin Praktek</label>
          <input type="text" class="form-control" id="no_izin_praktik" name="no_izin_praktik" required value="<?=$row['no_izin_praktik']?>" >
        </div>
        <div class="form-group">
          <label for="hari_praktik">Hari Praktik</label>
          <br>
            <input type="radio" name="hari_praktik" value="Senin">
            <label>Senin</label>
            <br>
            <input type="radio" name="hari_praktik" value="Selasa">
            <label>Selasa</label>
            <br>
            <input type="radio" name="hari_praktik" value="Rabu">
            <label>Rabu</label>
            <br>
            <input type="radio" name="hari_praktik" value="Kamis">
            <label>Kamis</label>
            <br>
            <input type="radio" name="hari_praktik" value="Jum'at">
            <label>Jum'at</label>
            <br>
            <input type="radio" name="hari_praktik" value="Sabtu">
            <label>Sabtu</label>
            <br>
            <input type="radio" name="hari_praktik" value="Minggu">
            <label>Minggu</label>
        </div>
        <div class="form-group">
          <label for="tanggal_praktek">Tanggal Praktek</label>
          <input type="date" class="form-control" id="tanggal_praktik" name="tanggal_praktik" required value="<?=$row['tanggal_praktik']?>" >
        </div>
        <div class="form-group">
          <label for="jam_praktik">Jam Praktik</label>
          <input type="time" class="form-control" id="jam_praktik" name="jam_praktik" required >
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
