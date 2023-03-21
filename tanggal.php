<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menampilkan tanggal</title>
        <link rel="stylesheet" href="assets/design.css">
    </head>
    <body>
        <div class="form">
            <h1 style="color :#8c6512; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">MENAMPILKAN DERET BILANGAN PRIMA</h1>
              <?php
                $hari = array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu','Minggu');
                $hariSkr = date('w')-1;
                $bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                $bulanSkr = date('m')-1;
                $tanggal = date('d');
                $tahun = date('Y'); 
                echo "Tanggal hari ini <br>" .$hari[$hariSkr]. ' ' .$tanggal. ' ' .$bulan[$bulanSkr]. ' ' .$tahun;
              ?>
        </div>
    </body>
    </html>