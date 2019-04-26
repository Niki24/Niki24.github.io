{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main class="field">
	<h2 class="title is-1">Contact Us</h2>
	<form method="post" id="contactform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="process_contact_form" >
		<span class="error">{$fields->getError('name')}</span>
		<label class="label" for="idName">* Name: </label>
		<input class="input" type="text" id="idName" name="name" value="{$fields->getValue('name')}">
		<span class="error">{$fields->getError('email')}</span>
		<label class="label" for="idEmail">* E-mail: </label>
		<input class="input" type="email" id="idEmail" name="email" value="{$fields->getValue('email')}">
		<span class="error">{$fields->getError('phone')}</span>
		<label class="label" for="idPhone">Phone: </label>
		<input class="input" type="tel" id="idPhone" name="phone" value="{$fields->getValue('phone')}">
		<span class="error">{$fields->getError('date')}</span>
		<label class="label" for="idDate">Date: </label>
		<input class="input" type="date" id="idDate" name="date" "{$fields->getValue('date')}">
		<span class="error">{$fields->getError('libraryID')}</span>
		<label class="label" for="idLibraries">Select Library:</label>
		{html_options name=library options=$libraries selected={$fields->getValue('libraryID')} id="idLibraries"}
		<span class="error">{$fields->getError('comments')}</span>
		<label class="label" for="idComments">* Comments: </label>
		<textarea class="input" id="myComments" name="comments" rows="2" cols="20">{$fields->getValue('comments')}</textarea>
		<input class="button is-primary" type="submit" value="Send Now" id="idSubmit">
	</form>
</main>

{include file='shared/footer.tpl'}