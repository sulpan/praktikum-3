<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

            <h2>FORM NILAI SISWA</h2>
            <form action="nilai_siswa.php" method="POST" class="form-horizontal">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="text" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="" name="matkul" class="custom-select">
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BDI">Basis Data 1</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="" name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="" name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="" name="nilai_tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
                </div>
            </div>
            </form>
    </body>
</html>
