<?php
require 'query.php';
require 'connector.php';
$result = $conn->query($sql_get_comment);
$result_mark = $conn->query($sql_get_mark);

$average = 0;
$count = 0;
$count_five = 0;
$count_four = 0;
$count_three = 0;
$count_two = 0;
$count_one = 0;

while ($row = $result_mark->fetch_assoc()) {
        $average += $row['value'];
        $count++;
        if($row['value'] == 5)
        {
            $count_five++;
        }
        if($row['value'] == 4)
        {
            $count_four++;
        }
        if($row['value'] == 3)
        {
            $count_three++;
        }
        if($row['value'] == 2)
        {
            $count_two++;
        }
        if($row['value'] == 1)
        {
            $count_one++;
        }
}
$average_res = $average / $count;
?>

<?php require "./components/header.php"; ?>	
<?php require "./components/banner.php"; ?>
<?php require "./components/about.php"; ?>
<?php require "./components/lunch.php"; ?>
<?php require "./components/first_dish.php"; ?>
<?php require "./components/second_dish.php"; ?>
<?php require "./components/pizza.php"; ?>
<?php require "./components/salad.php"; ?>
<?php require "./components/fast_food.php"; ?>
<?php require "./components/snack.php"; ?>
<?php require "./components/cold_snack.php"; ?>
<?php require "./components/dessert.php"; ?>
<?php require "./components/hot_drink.php"; ?>
<?php require "./components/form.php"; ?>
<?php require './components/map.php'; ?>
<?php require './components/footer.php'; ?>