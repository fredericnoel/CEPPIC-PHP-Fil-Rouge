<h1>Inscription</h1>
<?php
    if (isset($_POST['frmInscription']))
        $message = "Je viens du formulaire";
    else
        $message = "Je ne viens pas du formulaire";

    echo $message;
?>
<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" />
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" />
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="text" id="mail" name="mail" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmInscription" />
</form>