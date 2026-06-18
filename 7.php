<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter Number: <input type="number" name="num" id="num">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        $original = $num;
        $sum = 0;
        $reverse = 0;

        while ($num > 0) {
            $digit = $num % 10;
            $sum = $sum + $digit;
            $reverse = ($reverse * 10) + $digit;
            $num = (int)($num / 10);
        }

        echo "<h2>Result is:</h2>";
        echo "Sum is " . $sum . "<br>";

        if ($original == $reverse) {
            echo "This is a palindrome number";
        } else {
            echo "This is not a palindrome number";
        }
    }
    ?>
</body>
</html>
