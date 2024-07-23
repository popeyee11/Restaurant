<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Thanks for visiting our page and contacting us, Our Team will Reply you as soon as possible";
} else{
    echo "No connection";
}

mysqli_select_db($con, 'restaurant
');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$count = $_POST['count'];
$date = $_POST['date'];
$time = $_POST['time'];
$query = " insert into reserve (name, email, mobile, count, date, time) 
values ('$name', '$email', '$mobile', '$count', '$date', '$time') ";

// echo "$query";

mysqli_query($con, $query);

?>