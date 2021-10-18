<?php
$users = [];
$sauvegarde = 'lastname=' . $_POST['lastname'] . '&firstname=' . $_POST['firstname'] . '&email=' . $_POST['email'] . '&phone=' . $_POST['phone'] . '&subject=' . $_POST['subject'] . '&message=' . $_POST['message'];


if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    $errors = [];
    if (empty($_POST['lastname'])) {
        $errors['lastname1'] = 'Veuillez renseigner votre nom';
    }else{
        $users['lastname'] = $_POST['lastname'];
    }
    if (empty($_POST['firstname'])) {
        $errors['firstname1'] = 'Veuillez renseigner votre prénom';
    }else{
        $users['firstname'] = $_POST['firstname'];
    }
    if (empty($_POST['email'])) {
        $errors['email1'] = 'Veuillez renseigner votre email';
    }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email2'] = 'Veuillez utiliser un format valide';
    } else{
        $users['email'] = $_POST['email'];
    }
    if (empty($_POST['phone'])) {
        $errors['phone1'] = 'Veuillez renseigner votre numéro de téléphone';
    }else{
        $users['phone'] = $_POST['phone'];
    }
    if (empty($_POST['subject'])) {
        $errors['subject1'] = 'Veuillez renseigner le motif';
    }else{
        $users['subject'] = $_POST['subject'];
    }
    if (empty($_POST['message'])) {
        $errors['message1'] = 'Veuillez renseigner votre message';
    }else{
        $users['message'] = $_POST['message'];
    }
    if (count($errors) === 0) {
        header('Location: thanks.php?' . $sauvegarde);
    } else {
        header('Location: index.php?' . $sauvegarde . '&' . http_build_query($errors));
    }
}