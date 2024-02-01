<?php include 'header.php'; ?>
 
 <h5>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print
     “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h5>
    
  <div class="input-group">
  

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Firstname: <input type="text" name="firstname"aria-label="First name" class="form-control"> <br><br>
    Lastname: <input type="text" name="lastname"aria-label="Last name" class="form-control"> <br><br>
    <input type="submit" value="submit">
 </form>

 </div>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){

              $firstname=$_POST["firstname"];
              $lastname=$_POST["lastname"];

echo "Hello" . $firstname . $lastname . ", You are welcome to my site.";
 }
?>

<h5>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, 
    you can use the same table. </h5>

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Name</th>
      <th scope="col">Country</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Australia</td>
      <td>35</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Pekka</td>
      <td>Finland</td>
      <td>30</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>Anne</td>
      <td>USA</td>
      <td>32</td>>
    </tr>
  </tbody>
</table>

<h5>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string.</h5>
<?php
$str1 = "Hello";
$str2 = "World";
$joinedString = $str1 . $str2;

echo "Length of the joinedString: " . strlen($joinedString);


?>

<h5>Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h5>
<?php
$a=298;
$b=234;
$c=46;

$sum= $a + $b +$c;

echo "Sum:" . $sum;


?> 

<h5>Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER</h5>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
 <?php include 'footer.php'; ?>








    
