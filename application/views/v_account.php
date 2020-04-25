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

<h3>Biodata Diri</h3>
    <?php  ?>
     <div class="content">
        <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>Foto</td>
                <td width="1%">:</td>
                <td><?php echo $data['foto']; ?>KG</td>
            </tr>
            <tr>
                <td width="20%">Nama Lengkap</td>
                <td width="1%">:</td>
                <td><?php echo $data['nama_pasien']; ?></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td width="1%">:</td>
                <td><?php echo $data['tempat_lahir']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="1%">:</td>
                <td><?php echo $data['alamat']; ?></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td width="1%">:</td>
                <td><?php echo $data['no_hp']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td width="1%">:</td>
                <td><?php echo $data['email']; ?></td>
            </tr>
        </table>
    </div>
    <!-- Modal Tambah Dokter -->
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php echo form_open_multipart('Account/tambah_action');?>
      <div class="modal-header">
      <center><h2>Tambah Data Diri</h2></center>
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
          <label for="namadokter">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required >
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
            <label for="umur">Tempat Lahir</label>
            <br>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required> 
        </div>
        <div class="form-group">
          <label for="tanggal_praktek">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
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
          <label for="nohp">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" required >
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
<?php foreach($tbl_pasien as $row) { ?>
  <div class="modal fade" id="edit<?=$row['kode_pasien']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>Edit Data Diri</h2></center>
        </div>
        <div class="modal-body">

        <form method="post" action="<?php echo base_url() ?>index.php/Account/ubah/<?=$row['kode_dokter']?>">
        <div class="form-group">
          <label for="namadokter">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required value="<?=$row['nama_pasien']?>">
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
            <label for="umur">Tempat Lahir</label>
            <br>
            <input type="number" class="number" id="tempat_lahir" name="tempat_lahir" required value="<?=$row['tempat_lahir']?>"> 
        </div>
        <div class="form-group">
          <label for="tanggal_praktek">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required value="<?=$row['tanggal_lahir']?>">
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
          <label for="spesialis">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" required value="<?=$row['alamat']?>">
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