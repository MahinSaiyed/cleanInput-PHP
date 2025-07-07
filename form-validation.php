<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .input1 {
    background: none;
  }

  .label{
    margin-right: 27px;
  }

   .labe2{
    margin-right: 18px;
  }

   .labe3{
    margin-right: 10px;
  }

   .label4{
    margin-right: 10px;
  }

  .textarea{
    background: none;
    color :white ;
  }

  .submit{
    background-color: none;
    margin : 10px;
    padding : 5px 10px;
  }

  .submit:hover{
    background-color: #4CAF50;
    color: white;
  }

  .h2 {
    color:white;
  }
</style>

<body style="background-color: black;">
  <div style="color: white;">

    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $website = test_input($_POST["website"]);
      $comment = test_input($_POST["comment"]);
      $gender = test_input($_POST["gender"]);
    }

    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    <h2 class='h2'>PHP Form Validation </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="input">
       <label class = "label"> name: </label> <input class="input1" type="text" name="name"><br>
        <label class = "labe2"> E-mail: </label> <input class="input1" type="text" name="email"><br>
        <label class = "labe3"> Website: </label> <input class="input1" type="text" name="website"><br>
      </div>
      Comment: <textarea class="textarea" name="comment" rows="5" cols="40"></textarea><br>
      <label class= "label4">Gender:</label>
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other
      <br>

      <input class="submit" type="submit" name="submit" value="Submit">
    </form>
  </div>

  <?php
  echo "<h2 class = 'h2'> Here is the information you had entered :</h2>";
  echo "<span style='color:white;'>" . $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $comment;
  echo "<br>";
  echo $gender;
  ?>
  </div>
</body>

</html>