<div class="container-fluid">

<h1 class="heading">Creation de Recettes</h1>

<form method= "POST" class="form-inline">
<div class="container">
  <div class="row"><!-- ligne 1 -->
    <div class="form-group col-6"><!-- bloc 1 -->
    <label for="recipename" class="col-4 col-form-label">Nom de la recette</label>
    <input id="recipeName" class="form-control" name="Id_recipe" placeholder="Nom de la recette" type="text"><br>
    <label for="recipeAuthor" class="col-4 col-form-label">Auteur de la recette</label>
    <input id="recipeAuthor"  class="form-control"  name="Id_chef" placeholder="Nom de l'auteur" type="text" ><br>
    <label for="difficulty" class="col-4 col-form-label">Difficulté</label>
    <input id="difficulty"  class="form-control"  name="difficulty" type="text"><br>
    <label for="numberPeople" class="col-4 col-form-label">Nombre de personnes</label>
    <input id="numberPeople"   class="form-control"  name="number_people" type="text"><br>
    <label for="time" class="col-4 col-form-label">Temps de préparation<br>en minutes</label>
    <input id="time" class="form-control"  name="time" type="text"><br>
    <label for="state" class="col-4 col-form-label">Etat</label>
    <select class="form-control col-4" name="state">
      <option>Unblocked</option>
      <option>Blocked</option>
    </select>
        <br>
        <div class="m-3">
          <button name="submit" type="submit" class="btn btn-success">Valider</button>
          <button name="reset" type="reset" class="btn btn-cancel">Annuler</button>
        </div>
    </div><!-- fin bloc 1 -->

    <!-- bloc Image -->
<div class="form-group col-6 d-flex flex-column" >
<img width="100%" class="img-fluid mb-2" height="300px" src="<?=BASE_URL?>/public/images/" alt=""><br>
<div class="d-flex justify-content-between mb-2">

  <label for="upload" class="col-form-label">Télécharger une nouvelle image</label>
  
</div>
<div class="d-flex justify-content-between mb-2">
 
  <button type="button" class="btn btn-success btn-img">OK</button>
</div>


    </div><!-- fin bloc Image -->
   </div><!-- ligne 1 -->


    <div class=" row background-grey"><!-- ligne 2 -->
    <div class="col-8"><!-- bloc Prepa -->
    <h2 class="heading">Préparations</h2>
    <div class="container"><!--Container prepa -->

   
      <div class="row mb-5">
      <div class="col-1">
        <button type="button" class="btn btn-warning btn-prepa"><img src="<?=BASE_URL?>/public/images/up-svg.png" alt=""></button>
        <button  type="button" class="btn btn-warning  btn-prepa"><img src="<?=BASE_URL?>/public/images/down-svg.png" alt=""></button>
        <button type="button" class="btn btn-danger btn-prepa"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>

      </div>
      <div class="col-11 px-5">
    <textarea id="preparation" name="Preparation" cols="40" rows="5" class="form-control">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur facere ipsum itaque sequi amet iste modi exercitationem, magnam vero reprehenderit molestias, est rerum similique repellat repudiandae, delectus dolorum rem impedit.
    </textarea>
    </div>
      </div><!-- fin de row prepa -->
    



</div> <!-- fin de container de prepa-->
</div><!-- bloc prepa -->
<div class="col-4 "><!-- bloc ingredient -->
<h2 class="heading">Liste des ingrédients</h2>
<div id="list-ing" class="mb-3">
  
</div>
<label for="ing" class="col-form mb-3">Ajouter un ingrédient</label>
<input id="ing"  class="col-4 form-control mb-3"  name="ing" type="img" placeholder="Sucre"><br>
<input id="quantity"  class="col-4 form-control b-3"  name="quatity" type="img" placeholder="300">
<input id="unit"  class="col-4 form-control"  name="unit" type="img" placeholder="gr">
<button type="button" class="btn btn-success btn-img">OK</button>




<div><!-- formulaire pour les ingrédients-->
    </div>
</div><!-- fin bloc ingredient -->

    </div><!-- fin de row-->
</div><!-- fin container -->

</form>
</div><!-- fin du main-->


