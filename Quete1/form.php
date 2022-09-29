<?php
session_start();
// define variables and set to empty values
$lastNameErr = $firstNameErr = $emailErr = $subjectErr= $messageErr = $numberErr = "";
$lastName = $firstName = $email =$subject = $message = $number = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user_last_name"])) {
    $lastNameErr = "Last name is required";
  } else {
    $lastName = test_input($_POST["user_last_name"]);
    };

    if (empty($_POST["user_first_name"])) {
      $firstNameErr = "First name is required";
    } else {
      $firstName = test_input($_POST["user_last_name"]);
    };

    var_dump($_POST);
  echo'machin';
    if (empty($_POST["user_email"])) {
      $emailErr = "Email is required";
     
    } else {
     
      $email = test_input($_POST["user_email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
     
       
              }else {
                echo"email okay";
                 $emailExist = $email;
                }
    }

  if (empty($_POST["user_number"])) {
    $numberErr = "Number is required";
  } else if(preg_match('/^[0-9]{10}+$/', $_POST["user_number"])) {
    $numberGood = "Valid Phone Number";
    } else {
      $numberErr = "Invalid Phone Number";
          }

   
  if (empty($_POST["user_message"])) {
    $messageErr = "Message is required";
  } else {
    $comment = test_input($_POST["user_message"]);
      }}

      if (isset($_POST['submit'])){
        echo "submit ok";
            if ($lastNameErr == "" && $firstNameErr== "" && isset($emailExist)  && $subjectErr == "" && $messageErr == "" && isset($numberGood)){
        echo"tout est ok";
        echo $_POST["user_last_name"];
        $_SESSION["user"]=$_POST["user_last_name"];
        var_dump($_SESSION);
       
              header('Location:thanks.php');
              die();
                } else {
                  echo "Données manquantes";
                die();
                }; }
?>

<form method="post" action="thanks.php">
    <div>
        Nom :
        <input type="text" name="user_last_name">
        <span class="error">* <?php echo $lastNameErr;?></span>
        <br><br>
    </div>
    <div>
        Prenom :
        <input type="text" id="prenom" name="user_first_name">
        <span class="error">* <?php echo $firstNameErr;?></span>
        <br><br>
    </div>
    <div>
        Courriel :
        <input type="email" id="courriel" name="user_email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
    </div>
    <div>
        Numero :
        <input type="tel" id="number" name="user_number">
        <span class="error">* <?php echo $numberErr;?></span>
        <br><br>
    </div>
    <div>
        <label>Language :</label>
        <select name="user_subject">
            <option valeur="php">PHP</option>
            <option valeur="js">Javascript</option>
            <option valeur="ang">Angular</option>
            <option valeur="other">Autre</option>
        </select>
        <span class="error">* <?php echo $subjectErr;?></span>
        <br><br>
    </div>
    <div>
        Message :
        <textarea id="message" name="user_message"></textarea>
        <span class="error">* <?php echo $messageErr;?></span>
        <br><br>
    </div>
    <div class="button">
        <input type="submit" name="submit" value="envoyer"></input>
    </div>
</form>

<?php

// if (isset($_POST['submit'])){
//   echo "submit ok";
//       if ($lastNameErr == "" && $firstNameErr== "" && isset($emailExist)  && $subjectErr == "" && $messageErr == "" && isset($numberGood)){
//   echo"tout est ok";
//   echo $_POST["user_last_name"];
//   $_SESSION["user"]=$_POST["user_last_name"];
//   var_dump($_SESSION);
 
//         header('Location:thanks.php');
//         die();
//           } else {
//             echo "Données manquantes";
//           die();
//           }; }