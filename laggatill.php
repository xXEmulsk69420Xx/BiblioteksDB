
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblotek";

// kopplar till databas
$conn = new mysqli($servername, $username, $password, $dbname);
// kollar om den blir fel när du kopplar
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}

if (isset($_POST['Bok'])) {
    $Titel = $_POST["Titel"];
    $forf = $_POST["forf"];
    $ISBN = $_POST["ISBN"];
    $genre = $_POST["genre"];
    $sidor= $_POST["sidor"];
    $pid = $_POST["pid"];
    $ref = $_POST["ref"];

    echo "$Titel" . "<br>";
    echo "$forf" . "<br>";
    echo "$ISBN" . "<br>";
    echo "$genre" . "<br>";
    echo "$sidor" . "<br>";
    echo "$pid" . "<br>";
    echo "$ref" . "<br>";
    $sql = "INSERT INTO Bok (`Titel`, `Forfattare`, `ISBN`, `Genre`, `Antal sidor`, `PID`, `Referens`) VALUES ('$Titel','$forf', $ISBN, '$genre', $sidor, $pid, $ref)"; 
    echo $sql;
    if ($conn->query($sql)){
        
    }

}


Header("Location:admin.php");
?>
