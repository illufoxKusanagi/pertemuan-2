<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deret Bilangan Prima</title>
        <link rel="stylesheet" href="assets/design.css">
    </head>
    <body>
        
        <div class="form">
            <h1 style="color :#8c6512; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">MENAMPILKAN DERET BILANGAN PRIMA</h1>
            <form method="post" action="">
                <label for="num" style="color :#8c6512; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Masukkan nilai</label>
                <input type="text" id="num" name="num"><br><br>
                <input type="submit" name="submit" value="Hitung"><br><br>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $n = $_POST['num']; 
                    for ($i = 2; $i <= $n; $i++) {
                        $prima = true;
                        for ($j = 2; $j <= $i/2; $j++) {
                          if ($i % $j == 0) { 
                            $prima = false;
                            break;
                          }
                        }
                        if ($prima) {
                          echo "| $i ";
                        }
                      }
                      echo "|";
                      
                }
            ?>
        </div>
    </body>
    </html>