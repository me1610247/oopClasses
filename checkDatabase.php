<?php
include("Database.php");
$host = "localhost";
$username = "root";
$password = "";
$database = "pms";

$crud = new Database($host, $username, $password, $database);
$conn = $crud->connect();

// Create example
$data = array(
    "name" => "Mohamed Emad",
    "email" => "mohamedemad@gmail.com",
    "age" => 23,
    "phone"=>01003276440,
    "address"=>"sayda zainab",
    "password"=>"1234567"
);
$newId = $crud->create("users", $data);
if ($newId) {
    echo "New record created with ID: " . $newId . "<br>";
} else {
    echo "Error creating record.<br>";
}

// Read example
$users = $crud->read("users");
if ($users) {
    foreach ($users as $user) {
        echo "Name: " . $user["name"] . ", Email: " . $user["email"] . ", Age: " . $user["age"] . "<br>";
    }
} else {
    echo "No records found.<br>";
}

// Update example
$data = array(
    "name" => "Mohamed Dakroury",
    "age" => 24
);
$updateResult = $crud->update("users", $data, "id = 15");
if ($updateResult) {
    echo "Record updated successfully.<br>";
} else {
    echo "Error updating record.<br>";
}

// Delete example
$deleteResult = $crud->delete("users", "id = 15");
if ($deleteResult) {
    echo "Record deleted successfully.<br>";
} else {
    echo "Error deleting record.<br>";
}

$crud->close();