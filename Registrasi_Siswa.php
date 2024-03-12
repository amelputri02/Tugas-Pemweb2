<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
<h1>Form Registrasi Siswa</h1>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="laki laki"> 
        <label for="jk_1" class="custom-control-label">Laki laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="program studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="program studi" name="program studi" class="custom-select">
        <option value="sistem informasi">Sistem Informasi</option>
        <option value="teknik informatika">Teknik Informatika</option>
        <option value="bisnis digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programing</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Skill Web" id="Skill Web_0" type="radio" class="custom-control-input" value="html"> 
        <label for="Skill Web_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Skill Web" id="Skill Web_1" type="radio" class="custom-control-input" value="css"> 
        <label for="Skill Web_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Skill Web" id="Skill Web_2" type="radio" class="custom-control-input" value="javascript"> 
        <label for="Skill Web_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Skill Web" id="Skill Web_3" type="radio" class="custom-control-input" value="rwd boostrap"> 
        <label for="Skill Web_3" class="custom-control-label">RWD Boostrap</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Skill Web" id="Skill Web_4" type="radio" class="custom-control-input" value="php"> 
        <label for="Skill Web_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Skill Web" id="Skill Web_5" type="radio" class="custom-control-input" value="python"> 
        <label for="Skill Web_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Skill Web" id="Skill Web_6" type="radio" class="custom-control-input" value="java"> 
        <label for="Skill Web_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="bogor">Bogor</option>
        <option value="depok">Depok</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



<?php
        if (isset($_POST['proses'])){
            error_reporting(0);
            $NIM = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $prodi = $_POST['prodi'];
            $skills = $_POST['skill'];
            $nilai = implode(",",array_keys($skills));
            $dom =$_POST['domisili'];
            $email = $_POST['email'];
        }

        
    ?>

    <div class='container'>
        <div class='row'>
            <div class='mb-3 col-12'>
                <h1 class = 'text-center' > Hasil Pendaftaran</h1>
            </div>
            <div class = 'mb-3 col-4'>
                <p>Nama</p>
                <p>NIM</p>
                <p>Jenis Kelamin</p>
                <p>Program Studi</p>
                <p>Domisili</p>
                <p>Email</p>
                <p>Skill</p>
                <p>Total Nilai Skill</p>
                <p>Keterangan Nilai</p>
            </div>
            
        <?php
            $jumlah= 0;
            foreach($skills as $skil => $s){
                $jumlah += $s;
            }
        ?>

        <?php
        function skor_skill($jumlah)
        {
            if ($jumlah >= 100 && $jumlah <= 170) {
            return 'Sangat Baik';
            } elseif ($jumlah > 40 && $jumlah < 100) {
            return 'Baik';
            } elseif ($jumlah > 20 && $jumlah <= 60) {
            return 'Cukup';
            } elseif ($jumlah > 0 && $jumlah <= 40) {
            return 'Kurang';
            } else {
            return 'Tidak Memadai';
            }
        }
        $keterangan = skor_skill($jumlah)
        ?>

        <?php if (isset($_POST['proses'])){ ?>
            <div class = 'mb-3 col-8'>
                <p><?=$nama?></p>
                <p><?=$NIM?></p>
                <p><?=$jk?></p>
                <p><?=$prodi?></p>
                <p><?=$dom?></p>
                <p><?=$email?></p>
                <p><?=$nilai?></p>
                <p><?=$jumlah?></p>
                <p><?=$keterangan?></p>
            </div>
        <?php } ?>
        </div>

    </div>
</body>
</html>