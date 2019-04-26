{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main class="field">
	<h2>Add Recipe</h2>
	<form method="post" id="addrecipeform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="add_recipe" >
		<label class="label" for="idName">*Name: </label>
		<input class="input" type="text" id="idName" name="name"  required="required">
		<label class="label" for="idIngredients">*Ingredients: </label>
		<textarea class="input" cols="150" rows="50" id="idIngredients" name="ingredients" required="required"></textarea>
		<label class="label" for="idCalories">*Calories: </label>
		<input class="input" type="number" id="idCalories" name="calories" required="required">

		<input type="submit" class="button is-primary" value="Add" id="idSubmitAdd">
	</form>
</main>

{include file='shared/footer.tpl'}