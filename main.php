<!DOCTYPE html>

<head>
    <meta charset="UTF-8">

    <title>8 ataza</title>
</head>

<body>
    <?php
    require_once("db.php");
    ?>
    <form action="main.php" method="GET">
        <button class="eguneratu">Eguneratu</button>
    </form>

    <?php


    $kontsulta = "SELECT * FROM motogp_posiciones";
    $result = konexioaSortu()->query($kontsulta);

    echo "<br>";
    if ($result->num_rows > 0) {
        echo "<table border='2px' style='border-collapse: collapse; width: 50%; text-align: center;'>";
        echo "<tr><th>Postua</th><th>Dortsala</th><th>Izena</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Postua'] . "</td>";
            echo "<td>" . $row['Dortsala'] . "</td>";
            echo "<td>" . $row['Izena'] . "</td>";
            echo "</tr>";
        }
    }
    require_once ("ajax.php")
    ?>

   
    





    

</body >

</html >