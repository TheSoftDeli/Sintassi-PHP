<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Metodo "Post"</title>
    </head>
    <body>
        
        <form method="post" action="Sintassi.php">
            <!--CASELLE DI TESTO-->
            Nome<br>
            <input type="text" name="nome"><br>
            Cognome<br>
            <input type="text" name="cognome"><br>

            <!--SELECT BOX-->
            Paese<br>
            <select name="Paese">
            <option value="I">Italia</option>
            <option value="E">Estero</option>
            </select><br>

            <!--RADIO-->
            Sesso<br>
            <input type="radio" name="sesso" value="M"> M <br>
            <input type="radio" name="sesso" value="F"> F <br> 

            <!--CHECKBOX-->
            Hobby<br>
            <input type="checkbox" name="Hobby[]" value="S"> Sport <br>
            <input type="checkbox" name="Hobby[]" value="L"> Lettura <br>
            <input type="checkbox" name="Hobby[]" value="C"> Cinema <br>
            <input type="checkbox" name="Hobby[]" value="I"> Internet <br> 

            <!--TEXTAREA-->
            Commento<br>
            <input type="commento" rows="S" cols="30"> <br> <br>

            <!-- BOTTONI-->
            <button type="submit" name="InvioDati" value="value-submit"> InvioDati </button>

            

        </form>

        <?php
                echo "<br>"; 
                echo "Processo i dati";
                echo "<br>";

                if(!empty($_POST['nome'])and(!empty($_POST['cognome'])))
                {
                    if(isset($_POST['InvioDati']))
                    {
                        echo "<br>";
                        $nome = $_POST['nome'];
                        echo "Nome: " .$nome;
                        echo "<br>";
                        $cognome = $_POST['cognome'];
                        echo "Cognome: " .$cognome;
                        echo "<br>";
                        $paese = $_POST['Paese'];
                        echo "Paese: " .$paese;
                        echo "<br>";
                        $sesso = $_POST['sesso'];
                        echo "Sesso: " .$sesso;
                        echo "<br>";
                        $commento = $_POST['commento'];
                        echo "Commento: " .$commento;
                        echo "<br>";
                        
                    }

                    echo "Hobby: " .$hobby;
                    if(!empty($_POST['Hobby']))
                    {
                        foreach($_POST['Hobby'] as $chkval)
                        {
                            echo $chkval. " ";
                        }
                    }

                }
                else
                {
                    echo "DATI NON PERVENUTI!!";
                    echo "<br>";
                }

                echo "<br><br><br>";

                $fp = fopen("data.txt", "a");
                if(!file_exists("data.txt")) {
                    die('il file non esiste');
                } else {
                    echo "il file esiste ";
                }


                $fp = fopen("/my/path/to/file.txt", "r") or die("can't open file");

                if(!$fp) echo "Errore operazione con il file"; 
                    fwrite($fp, $nome.";".$cognome.";".$paese.";".$sesso.";".$Hobby."\n");
                fclose($fp);
                
                //nome array - iparr
                //$iparr = split ("\;", $ip);
                //$iparr[$i]

                //open your file in read mode
                $input = fopen("data.txt", "r");

                //display a line of a file until the end
                while(!feof($input))
                    //finisce con fget "s"
                    echo fgets($input). "<br>";
                fclose($input);

                
        ?>
    </body>
</html>