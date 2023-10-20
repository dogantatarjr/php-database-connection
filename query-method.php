<?php

    // It is an example of a login page .php files for showing query of data easily. (I will show the whole login page in a later project)

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Detect Post Method
        $username = $_POST["username"]; // Example Data From User: username
        $password = $_POST["password"]; // Example Data From User: password

        header(connect.php); // Connect to database with connect.php file

        $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'"; // Example Table: login. We import data to database. Query can be changed!

        $result = $connection->query($query); // Import data to page from database

        if ($result->num_rows == 1) {
            header("Location: user.html"); // Due to the result go to the other page
        } else {
            header("Location: fail.html"); // Due to the result go to the other page
        }

        $connection->close(); // Close connection after query and process done

    }

?>

<!-----><!-----><!-----><!-----><!-----><!-----><!-----><!-----><!-----><!----->

<?php

    // Again another example for query methods. It is from index.php. (Again I will show the whole login page in a later project)

    $result_title = $connection->query("SELECT title FROM post WHERE id = 1"); // Example Data: title (id is for showing location)
    $result_body = $connection->query("SELECT body FROM post WHERE id = 1"); // Example Data: body (id is for showing location)

    $title = $result_title->fetch_assoc()["title"]; // Create variable to direct data to location in html part 
    $body = $result_body->fetch_assoc()["body"]; // Create variable to direct data to location in html part 

    echo "<div>";
    echo "<h1 style='color: #E5B8F4;'>$title</h1>";
    echo "</div>";

?>