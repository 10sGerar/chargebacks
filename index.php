<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
// display php error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// connect to database
$conn = mysqli_connect('localhost', 'id18111443_gerardo', '2X@=af@<2&bZDsAr', 'id18111443_chargebacks');

// check connection
if(!$conn) {
    echo "Connection error: " . mysqli_connect_error();
}

// Write query for rep using last name
$sql = "SELECT * FROM tbl_Reps WHERE LastName='Hooban'";

// Make query & get results
$result = mysqli_query($conn, $sql);

// Fetch the resulting Columns as an array
$rep = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($rep);

/*// Free results from memory
mysqli_free_results($result);

// Close database connection
mysqli_close($conn);*/



echo "<h1>" . $rep[0]['LastName'] . "</h1>";

/*$mysqli = new mysqli("localhost","root","root","chargebacks");

// Attempt select query execution
$sql = "SELECT * FROM tbl_Reps WHERE LastName='Hooban'";

$results = $mysli->query($sql);

if (!$results->num_rows > 0) {
    echo "<p>There are no Reps with that last name";

}

echo "there are results";
    exit;*/

?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>