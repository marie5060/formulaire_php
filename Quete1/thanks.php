<?php

if ($_POST["user_last_name"] === "" || $_POST["user_first_name"] === "" ||$_POST["user_email"] === "" ||$_POST["user_subject"]=== "" || $_POST["user_number"] === "" || $_POST["user_message"] === ""){
    echo "Sorry somes informations are missing";
} else {
echo "Merci " . $_POST["user_last_name"]. " " . $_POST["user_first_name"]. " de nous avoir contacté à propos de " . $_POST["user_subject"]."<br>". PHP_EOL.
"Un de nos conseiller vous contactera soit à l’adresse " . $_POST["user_email"]. " ou par téléphone au " . $_POST["user_number"]. " dans les plus brefs délais pour traiter votre demande : " . $_POST["user_message"]. PHP_EOL;
}