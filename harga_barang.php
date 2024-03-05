<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas Pemweb 2.3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>

    <body>
        <form method='POST'>
            Nama Costumer : <input type='text' name='costumer' value='' size= '30'></br>
            Pilihan Produk : 
                <input type='radio' name='produk' value='Kasur' size= '6'>
                    <label>TV   </label>
                <input type='radio' name='produk' value='Lemari' size= '6'>
                    <label>Kulkas  </label>
                <input type='radio' name='produk' value='Kulkas' size= '6'>
                    <label>Mesin Cuci   </label></br>
            Jumlah : <input type='text' name='jumlah' value='' size= '6'></br>
            <button name='proses' value='tersimpan'>SIMPAN</button>
        </form>
        <?php
        error_reporting(0);
            $nama = $_POST['costumer'];
            $produk = $_POST['produk'];
            $jumlahbeli = $_POST['jumlah'];

            if($produk=='Kasur' ) $harga = 4200000;
            else if ($produk=='Lemari') $harga = 3100000;
            else if ($produk=='Kulkas') $harga = 3800000;

            $harga_total = $jumlahbeli * $harga;


            echo '</br>Nama Costumer : '.$nama;
            echo '</br>Produk dipesan : '.$produk;
            echo '</br>Jumlah dipesan : '.$jumlahbeli;
            echo '</br>Harga Satuan : Rp '.$harga;
            echo '</br>Harga Total : Rp '.$harga_total;
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>