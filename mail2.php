

<?php
// les erreurs
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Charge PHPMailer via Composer

require_once __DIR__ . '/vendor/autoload.php';

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

/*
//recapcha v3
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['recaptcha-response'])) {
        // Pas de token → on rejette ou on redirige
        header('Location: index.php');
        exit;
    }

    $secret = '6Lf1FIcsAAAAAM75D1iX2YVZCpC-PqzaADRSvYrK';
    $token  = $_POST['recaptcha-response'];

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret'   => $secret,
        'response' => $token
    ];

    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $result   = file_get_contents($url, false, $context);
    $resultData = json_decode($result, true);

    if ($resultData['success'] && $resultData['score'] >= 0.5 && $resultData['action'] === 'contact_form') {*/
        // OK : on traite réellement le formulaire
        // (enregistrement, envoi d’email, etc.)
        

        

        // Vérifie que le formulaire a bien été soumis en POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name    = isset($_POST['name']) ? trim($_POST['name']) : '';
            $email   = isset($_POST['email']) ? trim($_POST['email']) : '';
            $public = isset($_POST['public']) ? trim($_POST['public']) : '';
            
            
            

            if ($name === '' || $email === '' || $public === '') {
                die('Veuillez remplir tous les champs obligatoires.');
            }

            $mail = new PHPMailer(true);

            try {
                // CONFIG SMTP POUR GMAIL
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'dev.christianhiruelasgallardo@gmail.com';   // ton Gmail
                $mail->Password   = 'eiax wufu yhpo eniz';              // mot de passe d'application
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;              // TLS
                $mail->Port       = 587;                                         // 587 pour TLS

                // EXPÉDITEUR / DESTINATAIRE
                $mail->setFrom('dev.christianhiruelasgallardo@gmail.com', 'piondupilat.fr');
                // Où tu reçois le message (tu peux mettre la même adresse ou une autre)
                $mail->addAddress('dev.christianhiruelasgallardo@gmail.com', 'Réception formulaire');
                // Pour pouvoir répondre directement au client
                $mail->addReplyTo($email, $name);

                // CONTENU DU MAIL
                $mail->isHTML(true);
                $mail->Subject = 'Nouveau message depuis le formulaire de seance de decouverte';
                $mail->Body    =
                    '<h2>Contenu du message</h2>' .
                    '<p><strong>Nom :</strong> ' . htmlspecialchars($name) . '</p>' .
                    '<p><strong>Email :</strong> ' . htmlspecialchars($email) . '</p>' .
                    '<p><strong>Public :</strong> ' . htmlspecialchars($public) . '</p>'.
                    '<p><strong> Voudris etre informé de la prochaine seance decouverte</strong></p>' ;
                $mail->AltBody =
                    "Nom : $name\n" .
                    "Email : $email\n" .
                    "Public : $public\n" ;

                $mail->send();
                //echo 'Merci, votre message a bien été envoyé.';
                header('Location: accueil.php?success=1');
            } catch (Exception $e) {
                //echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
                header('Location: accueil.php?success=0');
            }
        } else {
            header('Location: accueil.php');
        }
   /* } else {
        // Suspicious : on logue, on bloque, ou on ajoute une étape de vérification
        header('Location: accueil.php');
    }
}
//6Lf7un8sAAAAALu1W-N1YwpPofWYHkX3CMc6N73S
*/
?>
