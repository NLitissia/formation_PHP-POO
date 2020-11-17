<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="reponse.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div>
      <input type="submit" name="valider" value="valider">
    </div>
</form>
</body>
</html>