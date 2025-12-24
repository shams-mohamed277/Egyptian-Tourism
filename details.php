<?php
include('header.php');
include('cities.php')
?>
<?php
$pagetitle = "City Details";

if (isset($_GET['id'])) {
    $city_id = $_GET['id'];

    if (array_key_exists($city_id, $cities)){
        $city = $cities[$city_id];
    }
}

if (!isset($city)){
    header('location: index.php');
    exit();
}
?>


<?php
include('footer.php');
?>