{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main class="field">
	<h2 class="title is-1">Recipe</h2>
         
     <h2 class="title is-3"> {$name} <br></h2>
        Calories: {$calories} <br>
        Ingredients: {$ingredients}<br>
        Reviews: <br>
                {foreach item=review from=$reviews}
                    {$review}<br>
                {/foreach}
    <br>        
	<form method="post" id="addreviewform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="add_review" >
		<input class="input" type="hidden" id="idID" name="id" value="{$id}">
		<label class="label" for="idReview">*Review: </label>
		<textarea class="input" cols="150" rows="150" id="idReview" name="review" required="required"></textarea>
        <label class="label" for="idDate">*Date: </label>
		<input class="input" type="date" id="idDate" name="date" placeholder="YYYY-MM-DD" required="required">
		<input type="submit" class="button is-primary" value="Add Review" id="idSubmitReview">
	</form>
</main>

{include file='shared/footer.tpl'}