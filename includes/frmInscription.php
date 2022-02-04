<form action="index.php?page=inscription" method="post" enctype="multipart/form-data">
    <label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="<?php echo $nom;?>" /><br />
    <label for="prenom">Prénom :</label><input type="text" id="prenom" name="prenom"  value="<?php echo $prenom;?>" /><br />
    <label for="email">e-mail :</label><input type="text" id="email" name="email"  value="<?php echo $email;?>" /><br />
    <label for="pseudo">Pseudo :</label><input type="pseudo" id="pseudo" name="pseudo"  value="<?php echo $pseudo;?>" /><br />
    <label for="password">Mot de passe :</label><input type="password" id="password" name="password" /><br />
    <label for="passwordverif">Vérification mot de passe :</label><input type="password" id="passwordverif" name="passwordverif" /><br />
    <label for="bio">Bio :</label><input type="bio" id="bio" name="bio"  value="<?php echo $bio;?>" /><br />
    <label for="avatar">Avatar</label><input type="file" name="avatar" id="avatar" value="<?php echo $avatar;?>" /><br />
    <input type="reset" value="Effacer" />
    <input type="submit" value="S'inscrire" name="inscription" />
    <input type="hidden" name="frm" />
</form>