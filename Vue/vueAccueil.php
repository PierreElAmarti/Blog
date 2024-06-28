<?php $this->titre = "Mon Blog"; ?>
<form action="index.php" method="POST">
    <label for="nom_nouveau_billet">Veuillez choisir un nom de projet:</label>
    <input type="text" id="nom_nouveau_billet" name="nom" rquired /><br><br>
    <label for="contenu_nouveau_billet">Veuillez saisir un contenu décrivant le  projet:</label>
    <input type="text" id="contenu_nouveau_billet" name="contenu" rquired /><br>
    <p class="titreBillet">Ajouter un Projet
    
    <input type="submit" name="button" value="Ajouter Projet"/>
    </p>
</form>
<?php
foreach ($billets as $billet):
 ?>
 <article>
  <header>
   <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
    <form action="index.php" method="POST">
        <h1 class="titreBillet"><?= $billet['titre'] ?>
        <input type="hidden" name="id" value="<?= $billet['id'] ?>">
        <input type="submit" name="button" value="Supprimer"/>
        </h1>
    </form>
    </a>
   <time><?= $billet['date'] ?></time>
  </header>
  <p><?= $billet['contenu'] ?></p>
 </article>
 <hr />
<?php endforeach; ?>
<script>
    document.querySelectorAll("input.suppr").forEach((e) => {
        e.style.backgroundColor="#04AA6D";
        e.style.border="none";
        e.style.textDecoration="none";
        e.style.margin="4px 2px";
        e.style.float="right";
    })
</script>
