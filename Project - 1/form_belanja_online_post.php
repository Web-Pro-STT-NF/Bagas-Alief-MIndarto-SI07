<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body style="background-color: #F5F5DC;">
    <div class="bg-info"><br>
        <h1 class="text-center text-white">FORM BELANJA ONLINE</h1>
        <br>
    </div>
    <div class="d-flex justify-content-around mt-5">
    <div class="col-6">
        <form method="POST" autocomplete="off" action="form_belanja_online_post.php">
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="pilihproduk" id="pilihproduk_0" type="radio" class="custom-control-input" value="tv"> 
                <label for="pilihproduk_0" class="custom-control-label">AC</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="pilihproduk" id="pilihproduk_1" type="radio" class="custom-control-input" value="kulkas"> 
                <label for="pilihproduk_1" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="pilihproduk" id="pilihproduk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                <label for="pilihproduk_2" class="custom-control-label">Kulkas</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-cart-plus"></i>
                </div>
                </div> 
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="text-white text-center card-header bg-info border-info">Daftar Harga</div>
        <div class="card-body">
            <p class="card-text">AC : 3.800.000</p><hr>
            <p class="card-text">TV : 4.200.000</p><hr>
            <p class="card-text">Oven : 863.000</p>
        </div>
    <div class="text-white text-center card-footer bg-info border-info">Harga dapat berubah setiap saat</div>
    </div>
    </div>
    <div class="m-5 border border-dark p-4 rounded">
        <?php
            if(isset($_POST['submit'])){
                $customer = $_POST['customer'];
                $pilihproduk = $_POST['pilihproduk'];
                $jumlah = $_POST['jumlah'];
                

                if($pilihproduk=='AC'){
                    $harga = 3800000;
                }
                elseif($pilihproduk=='tv'){
                    $harga = 4200000;
                }
                elseif($pilihproduk=='oven'){
                    $harga = 863000;
                }

                $hargatotal = $jumlah*$harga;

                
                switch($pilihproduk){
                    case "ac": $pilihproduk = "AC"; break;
                    case "tv": $pilihproduk = "TV"; break;
                    case "oven": $pilihproduk = "Oven"; break;
                    default: "";
                }
                
            }?>
            <?php if(isset($_POST['submit'])){?>
                    <p>Nama Customer : <?= $customer?> </p>
                    <p>Pilihan Produk : <?= $pilihproduk?></p> 
                    <p>Jumlah : <?= $jumlah?></p> 
                    <p>Total Belanja : <?= $hargatotal?></p>
                <?php }else{
                    echo '<div class="alert alert-secondary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Struk Belanja</div>';
                } ?>
    </div>
</body>
</html>