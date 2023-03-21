<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deret Fibionacci</title>
        <link rel="stylesheet" href="assets/design.css">
    </head>
    <body>
        <div class="form">
            <h1 style="color :#8c6512; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">MENAMPILKAN DERET BILANGAN FIBIONACHI</h1>
            <form method="post" action="">
                <label for="name">Nama :<br></label>
                <input type="text" id="nama" name="nama"><br><br>
                <label for="num">Nilai angka : <br></label>
                <input type="text" id="num" name="num"><br><br>
                <input type="submit" name="submit" value="Hitung"><br><br>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];
                    $nilai = $_POST['num'];
                    if(is_numeric($nilai) and is_string($nama)){
                        $grade=null;
                        while($nama!=null||$nilai!=null){
                            if($nilai>80 and $nilai<=100){
                                $grade = 'A';
                            }
                            elseif($nilai>70 and $nilai<=80){
                                $grade = 'AB';
                            }
                            elseif($nilai>66 and $nilai<=70){
                                $grade = 'B';
                            }
                            elseif($nilai>60 and $nilai<=65){
                                $grade = 'BC';
                            }
                            elseif($nilai>55 and $nilai<=60){
                                $grade = 'C';
                            }
                            elseif($nilai>40 and $nilai<=55){
                                $grade = 'D';
                            }
                            elseif($nilai<=40 and $nilai>=0){
                                $grade = 'E';
                            }
                            else{
                                echo "<p style='color:red'>** Nilai tidak valid **</p>";
                                break;
                            }
                            break;
                        }
                        echo "Nama : ".$nama .'<br>';
                        echo "Nilai : ".$grade. '<br>';
                    }
                    else{
                        echo "<p style='color:red'>** Input tidak valid **</p>";
                    }
                }
            ?>
        </div>
    </body>
    </html>