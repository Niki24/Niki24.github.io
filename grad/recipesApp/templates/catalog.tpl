{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}


<main id="catalog">
    <h2 class="title is-1">Catalog of Recipes</h2>
    <table class="table ">
	{foreach item=recipe from=$recipes_catalog}
		<tr>
			<td>
				<form action="index.php" id="editform" method="post">
                    <input type="hidden" name="action" value="edit_recipe_form">
                    <input type="hidden" name="recipe_id" value="{$recipe->getID()}">
                    <input class="button is-primary" type="submit" value="Edit" id="idSubmitEdit">
                </form>
                <form action="index.php" id="deleteform" method="post">
                    <input type="hidden" name="action" value="delete_recipe_form">
                    <input type="hidden" name="recipe_id" value="{$recipe->getID()}">
                    <input class="button is-primary" type="submit" value="Delete" id="idSubmitDelete">
                </form>
			</td>
			<td>
				<img src="{$recipe->getImage()}/default.jpg" alt="Cover Image" width="100">
			</td>
			<td>
				     <form action="index.php?action=show_recipe_page" id="showrecipepage" method="post">
                     <input type="hidden" name="action" value="show_recipe_page">
                     <input type="hidden" name="recipe_id" value="{$recipe->getID()}">
                     <input type="hidden" name="reviews">
                     <input class="button is-text" type="submit" value="{$recipe->getName()}" id="idSubmitRecipe">
                   </form>
                    &nbsp; &nbsp;Calories: {$recipe->getCalories()}
			</td>
		</tr>
	{/foreach}
	</table>
	<form action="index.php" id="addform" method="post">
		<input type="hidden" name="action" value="add_recipe_form">
		<input class="button is-primary" type="submit" value="Add New Recipe" id="idSubmitAdd">
	</form>
</main>

{include file='shared/footer.tpl'}