 <?= form_open( 'register/data_spss/', [ 'class' => 'form-inline'] ) ?>
  <h2 style="margin-top: 30px;margin-left: 15px;">Register Form</h2>
  <hr>
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Nama" name="nama" required>
  </div>

  <div class="input-container">
    <i class="fa fa-university icon"></i>
    <input class="input-field" type="text" placeholder="Fakultas" name="fk" required>
  </div>

  <div class="input-container">
    <i class="fa fa-child icon"></i>
    <input class="input-field" type="text" placeholder="Jurusan" name="jurusan" required>
  </div>

  <div class="input-container">
    <i class="fa fa-calendar icon"></i>
    <input class="input-field" type="type" placeholder="Angkatan" name="angkatan" required>
  </div>

  <div class="input-container">
    <i class="fa fa-child icon"></i>
    <input class="input-field" type="text" placeholder="No Handphone" name="nohp" required>
  </div>

  <div class="input-container">
    <i class="fa fa-genderless icon"></i>
    <label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="jadwal" value="29 September 2018" required>Gelombang 1 (29 September 2018)</label>
    <label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="jadwal" value="13 Oktober 2018" required>Gelombang 2 (13 Oktober 2018)</label>

  </div>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="No Handphone" name="nohp" required>
  </div>
  <button type="submit" name="submit" class="btn">Register</button>
<?= form_close() ?> 