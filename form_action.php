<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "Enter name: <b>$name</b>";
    echo "<br><br><br>Enter new name.";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="name"><br>
    <input type="submit" name="submit" value="Submit Form"><br>
</form>
<style>
  body {
    font-family: Arial;
    margin: 20px;
  }
  input[type="text"] {
    padding: 5px;
    margin-bottom: 10px;
  }
  input[type="submit"] {
    padding: 5px 10px;
  }
</style>
