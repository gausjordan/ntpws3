<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8"> 
    </head>

    <body>
        <h2>Kolokviji</h2>

        <form action="polja.php" method = "GET">
        <label for="ocj1">Prva ocjena:</label><br>
        <input type="number" id="fname" name="ocj1"><br>
        <label for="ocj2">Druga ocjena:</label><br>
        <input type="number" id="lname" name="ocj2"><br><br>
        <input type="submit" value="Pošalji">
        </form>
        
        <br />

        <?php
            if (!(empty($_GET['ocj1']) || empty($_GET['ocj2']))) {

                $ocj1 = $_GET['ocj1'];
                $ocj2 = $_GET['ocj2'];
                
                if ($ocj1<1 || $ocj1>5 || $ocj2<1 || $ocj2>5) {
                    echo "Ocjene moraju biti između 1 i 5.";
                }
                elseif ($ocj1==1 || $ocj2==1) {
                    echo "Prosjek ocjena je: 1";
                }
                else {
                    echo "Prosjek ocjena je: " . round(($ocj1 + $ocj2)/2);
                }
            }
            
            else {
                # GET nije ništa primio; prikazuje se ništa.
            }
        ?>

    </body>
</html>
