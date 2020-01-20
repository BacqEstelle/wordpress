<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <form action=""  method="post" class="was-validated">
            <div class="form-group">
                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required>
                <div class="valid-feedback">Votre nom est valide.</div>
                <div class="invalid-feedback">Veuillez indiquer votre nom.</div>
            </div>


            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
                <div class="valid-feedback">Votre e-mail est valide.</div>
                <div class="invalid-feedback">Veuillez indiquer votre e-mail.</div>
            </div>

            <div class="form-group">
                <input type="tel" class="form-control" id="tel" placeholder="Tél." name="tel" required>
                <div class="valid-feedback">Votre numéro de téléphone est valide.</div>
                <div class="invalid-feedback">Veuillez indiquer votre numéro de téléphone.</div>
            </div>


            <div class="form-group">
                <input type="number" class="form-control" id="codepostal" placeholder="Code Postal" name="codepostal" required>
                <div class="valid-feedback">Votre Code Postal est valide</div>
                <div class="invalid-feedback">Veuillez indiquer votre code postal.</div>
            </div>

            <div class="form-group">
                <textarea class="form-control" rows="3" id="message" placeholder="Ex: Message" name="message" required></textarea>
                <div class="valid-feedback">Votre message est valide</div>
                <div class="invalid-feedback">Veuillez indiquer votre message.</div>
            </div>




            <button type="submit" name="sendmessage" value="sendmessage" class="btn btn-primary">Envoyer <img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/fleche-droite.svg"></button>
        </form>
    </div>

</body>

</html>
<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["sendmessage"]) ) {
    $nameBrut =  $_POST['nom'];
    $name = filter_var($nameBrut, FILTER_SANITIZE_STRING);
    $emailBrut = $_POST['email'];
    $email = filter_var($emailBrut, FILTER_SANITIZE_EMAIL);
    $telBrut = $_POST['tel'];
    $tel = filter_var($telBrut, FILTER_SANITIZE_STRING);

    $codepostalBrut = $_POST['codepostal'];
    $codepostal = filter_var($codepostalBrut, FILTER_SANITIZE_STRING);

    $msgBrut = $_POST['message'];
    $msg = filter_var($msgBrut, FILTER_SANITIZE_STRING);

    if ($name == "") {
        echo "Votre message n'a pu être envoyé";
    }
    elseif ($email == ""){
        echo "Votre message n'a pu être envoyé";
    }
    elseif ($tel == ""){
        echo "Votre message n'a pu être envoyé";
    }
    elseif ($codepostal == ""){
        echo "Votre message n'a pu être envoyé";
    }
    elseif ($msg == ""){
        echo "Votre message n'a pu être envoyé";
    }
    else{
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $email . "\r\n";

        $message_to_send = '

        <p><b>Nom : </b>' . $name . '<br>
        <b>Email : </b>' .$email. '<br>
        <b>Tél. : </b>' . $tel . '<br>
        <b>Code Postal : </b>' . $codepostal. '<br>
        <b>Message : </b>' . $msg . '</p>';

        $retour = mail('bacqestelle@gmail.com', 'Formulaire de contact', $message_to_send, $entete);
        if($retour) {
            echo '<body onLoad="alert(\'Votre message a bien été envoyé !\')">';
            
        }

    }



};


?>