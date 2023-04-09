<html>
<head>
  <title>Available Rooms</title>
</head>
<body>
	<h1>Available Rooms</h1>

</body>
</html>

<?php 
$db = pg_connect("host=localhost port=5432 dbname=eHotel user=postgres password=Canada1867!");

$start_date = $_POST['StartDate'];
$end_date = $_POST['EndDate'];
$street_name = $_POST['street_name'];
$street_num = $_POST['street_number'];
$city = $_POST['city'];
$province = $_POST['province'];
$zip_code = $_POST['zip_code'];
$capacity = $_POST['capacity'];
$price = $_POST['price'];
$hotel_chain = $_POST['hotel_chain'];

$result = pg_query($db, "SELECT * FROM ehotel.rooms WHERE capacity = $capacity AND price <= $price AND ");

while($row=pg_fetch_assoc($result)) {
	echo print_r($row). "<br>";
}

echo '<p><a href="javascript:history.go(-1)" title="Return to previous page">« Go Back</a></p>';

?>