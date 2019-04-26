{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main class="field">
	<h2 class="title is-1">Contact Us</h2>
	<form method="post" id="contactform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="process_contact_form" >
		<label class="label" for="idName">* Name: </label>
		<input class="input" type="text" id="idName" name="name" required="required">
		<label class="label" for="idEmail">* E-mail: </label>
		<input class="input" type="email" id="idEmail" name="email" required="required">
		<label class="label" for="idPhone">Phone: </label>
		<input class="input" type="tel" id="idPhone" name="phone">
		<label class="label" for="idDate">Date: </label>
		<input class="input" type="date" id="idDate" name="date">
		<label class="label" for="idComments">* Comments: </label>
		<textarea  class="input" id="myComments" name="comments" rows="2" cols="20" required="required"></textarea>
		<input class="button is-primary" type="submit" value="Send Now" id="idSubmit">
	</form>
</main>

{include file='shared/footer.tpl'}