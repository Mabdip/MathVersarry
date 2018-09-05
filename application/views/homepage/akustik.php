 <?= form_open( 'register/data_akustik/', [ 'class' => 'form-inline'] ) ?>
  <h2 style="margin-top: 30px;margin-left: 15px;">Register Form</h2>
  <hr>
  <?php echo $this->session->flashdata('msg'); ?>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="NISN" name="nisn">
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Nama" name="nama">
  </div>

  <div class="input-container">
    <i class="fa fa-university icon"></i>
    <input class="input-field" type="text" placeholder="Asal Sekolah" name="asal">
  </div>

  <div class="input-container">
    <i class="fa fa-child icon"></i>
    <input class="input-field" type="text" placeholder="Tempat Lahir" name="tempat">
  </div>

  <div class="input-container">
    <i class="fa fa-calendar icon"></i>
    <input class="input-field" type="date" placeholder="Tanggal Lahir" name="tanggal">
  </div>

  <div class="input-container">
    <i class="fa fa-genderless icon"></i>
    <label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="jk" value="Laki-laki">Laki-laki</label>
    <label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="jk" value="Perempuan">Perempuan</label>

  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="No Handphone" name="nohp">
  </div>

  <div class="input-container">
    <i class="fa fa-file-archive-o icon"></i>
    <label style="margin-top: 8px;margin-left: 5px;">Upload Bukti transfer :</label>
    <input class="input-field" type="file" value="upload" name="bukti">
  </div>
  <button type="submit" name="submit" class="btn">Register</button>
<?= form_close() ?> 