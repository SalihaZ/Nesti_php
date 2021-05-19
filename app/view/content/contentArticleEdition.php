<h1>Article</h1>
<h2>Edition</h2>

<p>Recette n° <?= $id_article; ?>
<form method= "POST">

<div>
    <label for="articleName" class="col-4 col-form-label">Nom d'usine de l'article</label><br>
    <input id="articleName" name="name_article" placeholder="Nom d'usine de l'article" type="text" value="<?= $recipe->getName(); ?>"><br>
    <label for="userArticleName" class="col-4 col-form-label">Nom de l'article pour l'utilisateur</label>
    <input id="userArticleName" name="user_artcile" type="text"><br>
    <label for="id" class="col-4 col-form-label">Identifiant</label>
    <input id="id" name="id" type="text"><br>
    <label for="price" class="col-4 col-form-label">Prix de vente</label>
    <input id="price" name="price" type="text"><br>
    <label for="stock" class="col-4 col-form-label">Stock</label>
    <input id="stock" name="stock" type="text"><br>

    <div>
      <button name="submit" type="submit" class="btn btn-success">Valider</button>
      <button name="reset" type="reset" class="btn btn-cancel">Annuler</button>
    </div><br>
    
</div>