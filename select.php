<?php
include_once('database.php');

//Hoe je alles selecteert in een query zonder variabele
$query = "SELECT * FROM producten";
$stmt = $conn->query($query);
// -

// Hoe je een single row selecteert met placeholders
// $query = "SELECT * FROM producten WHERE product_code = :product_code";
// $stmt = $conn->prepare($query);
// $productCode = 1;
// $stmt->bindParam(':product_code', $productCode);
// $stmt->execute();
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// -

// Hoe je een single row selecteert met named parameters
// $query = "SELECT * FROM producten WHERE product_code = :product_code";
// $stmt = $conn->prepare($query);
// $params = array(
//     ':product_code' => 2
// );
// $stmt->execute($params);
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// -
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Prijs</th>
                <th scope="col">Omschrijving</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //Hoe je alles selecteert in een query zonder variabele
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['product_naam']."</td>";
                echo "<td>".$row['prijs_per_stuk']."</td>";
                echo "<td>".$row['omschrijving']."</td>";
                echo "</tr>";
            }
            //-

            // Hoe je een single row selecteert met placeholders
            // echo "Product Code: " . $row['product_code'] . "<br>";
            // echo "Naam: " . $row['product_naam'] . "<br>";
            // echo "Prijs: " . $row['prijs_per_stuk'] . "<br>";
            // echo "Prijs: " . $row['omschrijving'] . "<br>";
            //-

            // Hoe je een single row selecteert met named parameters
            // echo "Product Code: " . $row['product_code'] . "<br>";
            // echo "Naam: " . $row['product_naam'] . "<br>";
            // echo "Prijs: " . $row['prijs_per_stuk'] . "<br>";
            // echo "Prijs: " . $row['omschrijving'] . "<br>";
            // -
        ?>
        </tbody>
    </table>
</body>
</html>