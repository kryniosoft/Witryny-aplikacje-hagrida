<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz zad 1</title>
</head>
<body>
    <div>
        <h1></h1>Ciąg liczb</h1>
        <form method="post">
            <label for="startowa">Pierwsza liczba: </label>
            <input type="text" name="startowa">
            <br/>
            <label for="ilosc">Ilość liczb: </label>
            <input type="text" name="ilosc">
            <br/>
            <label for="roznica">Róźnica</label>
            <input type="text" name="roznica">
            <br/>
            <input type="submit" value="oblicz">
        </form>
        <?php
            if ($_POST != null) {
                $ciag = "ciag: ";
                $initialValue = $_POST["startowa"];
                $addBy = $_POST["roznica"];
                echo "ciag: ";
                for ($i = 0; $i < $_POST["ilosc"]; $i++) {
                    echo ", ".$initialValue + $addBy * $i;
                }
            }
        ?>
    </div>
</body>
</html>