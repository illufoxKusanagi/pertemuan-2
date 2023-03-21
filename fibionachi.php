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
                <label for="num" style="color :#8c6512; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Masukkan nilai</label>
                <input type="text" id="num" name="num"><br><br>
                <input type="submit" name="submit" value="Hitung"><br><br>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $awl=0;
                    $akhr=1;
                    $n = $_POST['num'];

                    for ($i=0; $i<$n; $i++)
                    {
                        if($i==0){
                            echo "| 0 ";
                        }
                        elseif($i==1){
                            echo "| 1 ";
                        }
                        else{
                            $output = $akhr + $awl;
                            echo "| $output ";
                            $awl = $akhr;
                            $akhr = $output;
                        }
                    }
                    echo " | ";
                }
            ?>
        </div>
    </body>
    </html>