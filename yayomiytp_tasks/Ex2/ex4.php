<?php
$title = "Exercise 4: Control flow and loops";
include 'header.php';
?>
<h4>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
     decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input). </h4>


<div class="input-group">
  

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name"aria-label="Name" class="form-control"> <br><br>
  Age: <input type="text" name="age"aria-label="Age" class="form-control"> <br><br>
  <input type="submit" value="submit">
</form>

</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["name"]) && isset($_POST["age"])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "<h3> $name. You are eligible to vote!</h3>";
        } else {
            echo "<h3> $name. You are not eligible to vote.</h3>";
        }
    }
}
?>



<h4>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays</h4>

<div class="input-group">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Month: <input type="text" name="month" aria-label="month" class="form-control"> <br><br>
        <input type="submit" value="submit">
    </form>
</div>

<?php

$currentMonth = date('F');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["month"])) {
        $inputMonth = $_POST["month"];

        if ($inputMonth == 'August') {
            echo "It's August, so it's still holiday.";
        } else {
            echo "Not August, this is $inputMonth so I don't have any holidays.";
        }
    }
}
?>




<h4>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h4>

<div class="input-group">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Multiply Number: <input type="text" name="multiply_number" aria-label="multiply_number" class="form-control"> <br><br>
        <input type="submit" value="Submit">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['multiply_number'])) {
        
        $multiply_number = $_POST['multiply_number'];

        
        $multiply_number = intval($multiply_number);

        
        echo "<h2>Multiplication Table of $multiply_number:</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Multiplier</th><th>Result</th></tr></thead>";
        echo "<tbody>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $multiply_number * $i;
            echo "<tr><td>multiply_number x $i</td><td>$result</td></tr>";
        }
        echo "</tbody></table>";
    }
}
?>





<h4> 4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h4>

<div class="input-group">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Number: <input type="text" name="number" aria-label="number" class="form-control"> <br><br>
        <input type="submit" value="Submit">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['number'])) {
        
        $number = $_POST['number'];

        
        $number = intval($number);

        
        $i = 1;

       
        
        echo "<ul>";
        while ($i <= $number) {
            echo "$i";
            $i++;
        }
        echo "</ul>";
    }
}
?>

<h4>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. <br>$myarray=("HTML", "CSS", "PHP", "JavaScript").</h4>

<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");

echo "<ul>";
foreach ($myarray as $element) {
    echo "<li>$element</li>";
}
echo "</ul>";
?>





<?php include 'footer.php'; ?>