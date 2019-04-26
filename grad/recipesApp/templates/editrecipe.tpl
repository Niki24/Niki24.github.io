{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main class="field">
	<h2 class="title is-1">Update Recipe</h2>
	<form method="post" id="editrecipeform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="update_recipe" >
		<input class="input" type="hidden" id="idID" name="id" value="{$id}">
		<label class="label" for="idName">*Name: </label>
		<input class="input" type="text" id="idName" name="name" value="{$name}" required="required">
		<label class="label" for="idIngredients">*Ingredients: </label>
		<input class="input" type="text" id="idIngredients" name="ingredients" value="{$ingredients}" required="required">
		<label class="label" for="idCalories">*Calories: </label>
		<input class="input"  type="number" id="idCalories" name="calories" value="{$calories}" required="required">

		<input type="submit" class="button is-primary" value="Update" id="idSubmit">
	</form>
</main>

{include file='shared/footer.tpl'}