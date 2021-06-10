<div class="container offset">


 <h1 class="heading text-center">Creation de Recettes</h1>
<form method= "POST" class="form-inline">
<div class="container">
  <div class="row justify-content-md-center"><!-- ligne 1 -->
 
    <div class="form-group col-6"><!-- bloc 1 -->
    <label for="recipename" class="col-4 col-form-label">Nom de la recette</label>
    <input id="recipeName" class="form-control" name="name_recipe" placeholder="Nom de la recette" type="text"><br>
    <label for="recipeAuthor" class="col-4 col-form-label" >Auteur de la recette</label>
    <input id="recipeAuthor"  class="form-control"  name="Id_chef" placeholder="Nom de l'auteur" type="text" disabled value="<?=$author;?>"><br>
    <label for="difficulty" class="col-4 col-form-label">Difficulté</label>
    <input id="difficulty"  class="form-control"  name="difficulty" type="text"><br>
    <label for="numberPeople" class=" col-form-label">Nombre de personnes</label>
    <input id="numberPeople"   class="form-control"  name="number_people" type="text"><br>
    <label for="time" class="col-form-label">Temps de préparation<br>en minutes</label>
    <input id="time" class="form-control"  name="time" type="text"><br>
    
   

    <select class="mx-auto form-control col-6 mb-5" name="state">
      <option value= "a">Actif</option>
      <option value= "b">Inactif</option>
      <option value="w">En attente</option>
    </select>
   
        <br>
        <div class="m-3 mx-auto">
          <button name="submit" type="submit" class="btn btn-success" value="ok">Valider</button>
          <button name="reset" type="reset" class="btn btn-cancel">Annuler</button>
        </div>
    </div><!-- fin bloc 1 -->



   </div><!-- ligne 1 -->


</div><!-- fin container -->

</form>
</div><!-- fin du main-->


