<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>

    <h2>Student Information Form</h2>

    <form method="post">
        USN: <input type="text" name="usn" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        Branch: <input type="text" name="branch" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>
        <input type="submit" name="submit" value="Insert">
    </form>

    <?php
    $connection = mysqli_connect("localhost", "root", "", "student_db");

    if (!$connection) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $usn = $_POST['usn'];
        $name = $_POST['name'];
        $branch = $_POST['branch'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $insert_query = "INSERT INTO student_info VALUES ('$usn', '$name', '$branch', '$email', '$phone')";

        if (mysqli_query($connection, $insert_query)) {
            echo "<h3>Record Inserted Successfully</h3>";
        } else {
            echo "Error inserting record: " . mysqli_error($connection);
        }
    }

    echo "<h2>Stored Student Records</h2>";

    $select_query = "SELECT * FROM student_info";
    $result = mysqli_query($connection, $select_query);

    if ($result) {
        echo "<table border='1' cellpadding='10'>
        <tr>
            <th>USN</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['usn'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['branch'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    mysqli_close($connection);
    ?>

</body>
</html>
