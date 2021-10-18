
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, _GET-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  action="controller.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="lastname"  name="lastname" value="<?=isset($_GET['lastname']) ? $_GET['lastname'] : ''?>" required>
        <?= isset($_GET['lastname1']) ? $_GET['lastname1'] : '' ?>
    </div>
    <div>
        <label  for="nom">Prénom :</label>
        <input  type="text"  id="firstname"  name="firstname" value="<?=isset($_GET['firstname']) ? $_GET['firstname'] : ''?>" required>
        <?= isset($_GET['firstname1']) ? $_GET['firstname1'] :''; ?>
    </div>
    <div>
        <label  for="courriel">Adresse mail :</label>
        <input  type="email"  id="email"  name="email" value="<?=isset($_GET['email']) ? $_GET['email'] : ''?>" required>
        <?= isset($_GET['email1']) ? $_GET['email1'] : ''; ?>
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="phone" value="<?=isset($_GET['phone']) ? $_GET['phone'] : ''?>" required>
        <?= isset($_GET['phone1']) ?  $_GET['phone1'] : ''; ?>
    </div>
    <div>
        <select name="subject" id="subject" required >
            <option value="">Sélectionnez un motif</option>
            <option value="inscription" <?= isset($_GET['subject']) && $_GET['subject'] === 'inscription' ? 'selected' : '' ?>>Inscription</option>
            <option value="prix" <?= isset($_GET['subject']) && $_GET['subject'] === 'prix' ? 'selected' : '' ?>>Tarifs</option>
            <option value="autres" <?= isset($_GET['subject']) && $_GET['subject'] === 'autres' ? 'selected' : '' ?>>Autres</option>
            <option value="desinscription" <?= isset($_GET['subject']) && $_GET['subject'] === 'desinscription' ? 'selected' : '' ?>>Désinscription</option>
        </select>
        <?= isset($_GET['subject1']) ?  $_GET['subject1'] : '' ?>
    </div>
    <div>        <p><?= isset($_GET['error_lastname']) ? $_GET['error_lastname'] : '' ?></p>

        <label  for="message">Message :</label>
        <textarea  id="message"  name="message"required ><?=isset($_GET['message']) ? $_GET['message'] : ''?></textarea>
        <?= isset($_GET['message1']) ?  $_GET['message1'] : '' ?>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer !</button>
    </div>
</form>
</body>
</html>