<h1>Recette</h1>
<h2>Edition</h2>
<p>Recette n° <?= $id_recipe; ?>
<form method= "POST">


<label for="recipename" class="col-4 col-form-label">Nom de la recette</label><br>
    <input id="recipeName" name="Id_recipe" placeholder="Nom de la recette" type="text" value="<?= $recipe->getName(); ?>"><br>
    <label for="recipeAuthor" class="col-4 col-form-label">Auteur de la recette</label>
    <input id="recipeAuthor" name="Id_chef" placeholder="Nom de l'auteur" type="text"><br>
    <label for="difficulty" class="col-4 col-form-label">Difficulté</label>
    <input id="difficulty" name="difficulty" type="text"><br>
    <label for="numberPeople" class="col-4 col-form-label">Nombre de personnes</label>
    <input id="numberPeople" name="number_people" type="text"><br>
    <label for="time" class="col-4 col-form-label">Temps de préparation<br>en minutes</label>
    <input id="time" name="time" type="text"><br>

    <div>
      <button name="submit" type="submit" class="btn btn-success">Valider</button>
      <button name="reset" type="reset" class="btn btn-cancel">Annuler</button>
    </div><br>
 
    <div class="col-8">
      <textarea id="preparation" name="Preparation" cols="40" rows="5" class="form-control">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur facere ipsum itaque sequi amet iste modi exercitationem, magnam vero reprehenderit molestias, est rerum similique repellat repudiandae, delectus dolorum rem impedit.
      </textarea><br>
      <textarea id="preparation" name="Preparation" cols="40" rows="5" class="form-control">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt adipisci similique nisi architecto totam maiores laboriosam. Enim nisi voluptatibus voluptates unde facere? Explicabo, dolores voluptates rerum nulla doloribus ullam recusandae?
      </textarea><br>
      <textarea id="preparation" name="Preparation" cols="40" rows="5" class="form-control">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolorem, hic commodi sequi sit rerum quaerat sed distinctio architecto molestias laborum blanditiis voluptates, nam natus eaque optio quidem? Harum, veritatis.
      </textarea><br>

    </div>
</div>

</form>
