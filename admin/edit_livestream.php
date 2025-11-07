<?php
$servername = "localhost";
$username = "livebroa_auction";
$password = "DSogReWSP";
$dbname = "livebroa_auction";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Something went wrong: " . $conn->connect_error);
}

?>



<html>

<head>

</head>

<body>

<?php if( $_POST['url'] == NULL) { ?>

 <form action="edit_livestream.php?id=<?= $_GET['id'] ?>" method="POST"> Enter URL:
        <input type="text" name="url"> 
        <input type="submit" value="Submit">
    </form>

<?php } else 
			{ 

				$link = $_POST['url'];
				$id = $_GET['id'];


				$sql = "UPDATE webid_auctions SET livestream_link='$link' WHERE id=$id";

				if ($conn->query($sql) === TRUE) {
				    echo "<br><br>URL Updated...Redirecting";
				    header("Location: editauction.php?id=$id&offset=1");
				} else {
				    echo "Something went wrong: " . $conn->error;
				}

				$conn->close();
			} 
?>

</body>

</html>