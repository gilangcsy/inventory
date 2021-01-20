<?php



// Check If form submitted, insert form data into users table.
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // include database connection file
    include_once("../../auth/koneksi.php");

    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO user(username, password) VALUES('$username','$password')");

    if ($result) {
        echo "User added successfully. <a href='index.php'>View Users</a>";

        echo "<meta http-equiv='refresh' content='1;url=../../index.html'>";
    }
}
