<?php
include_once("koneksi.php");
$id=$_GET['id'];
$query="SELECT * FROM tb_buku WHERE id_buku=" . $id;
$hasil=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Ubah Buku</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstr
ap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA
wiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Ubah Buku</title>
</head>
<body>
<div class="alert alert-success text-center" role="alert" >
<h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
</div>
<h1 class="ml-5">Ubah Koleksi Buku</h1>

<form method="post" action="prosesubahbuku.php"
class="ml-5">
<?php while ($data=mysqli_fetch_array($hasil)) { ?>
<!-- Menampilkan ID Buku sebagai input non-editable -->
<div class="form-group">
        <label for="id_buku">ID Buku</label>
        <input type="text" class="form-control" id="id_buku" value="<?php echo $data['id_buku']; ?>" readonly>
    </div>
    <input type="hidden" name="id" value="<?php echo $data['id_buku']; ?>">

    <!-- judul -->
<div class="form-group row">
<label for="judul" class="col-sm-1 col-form-label">Judul
Buku</label>
<div class="col-sm-3">
<input type="text" name="judul" class="form-control"
value="<?php echo $data['judul_buku'] ?>" >
</div>
</div>
<!-- pengarang -->
<div class="form-group row">

<label for="pengarang" class="col-sm-1 col-form-
label">Pengarang</label>

<div class="col-sm-3">
<input type="text" name="pengarang" class="form-control"
value="<?php echo $data['pengarang'] ?>" >
</div>
</div>

<!-- tahun terbit -->
<div class="form-group row">

<label for="tahun_terbit" class="col-sm-1 col-form-
label">Tahun Terbit</label>

<div class="col-sm-3">

<input type="number" name="tahun_terbit" class="form-
control" value="<?php echo $data['tahun_terbit'] ?>" >

</div>
</div>

<!-- kategori -->
<div class="form-group row">

<label for="kategori" class="col-sm-1 col-form-
label">Kategori</label>

<div class="col-sm-3">
<input type="text" name="kategori" class="form-control"
value="<?php echo $data['kategori'] ?>">
</div>
</div>
<!-- button kirim -->
<button type="submit" class="btn btn-primary mb-1 mt-1 ml-0
mr-0" >Kirim</button>

<a href="index.php" class="btn btn-primary mb-1 mt-1 ml-
0"><i class="fas fa-user-plus mr-0"></i>Koleksi Buku</a>

</form>
<?php } ?>
<!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVN
A/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/po
pper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fak
FPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.
min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyj
Uar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>