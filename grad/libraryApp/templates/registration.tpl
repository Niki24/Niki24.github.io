{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Registration</h2>
	
	<form action="." id="registrationform" method="post">
	<input type="hidden" id="idHidden" name="action" value="process_registration_form" >
	<fieldset>
        <label class="label" for="fname">* First Name: </label>
        <span class="error">{$fields->getError('fname')}</span>
		<input class="input" type="text" id="idfName" name="fname" value="{$fields->getValue('fname')}" required>
		<label class="label" for="lname">* Last Name: </label>
		<span class="error">{$fields->getError('lname')}</span>
		<input class="input" type="text" id="idlName" name="lname" value="{$fields->getValue('lname')}" required>
		<label class="label" for="idEmail">Email:</label>
		<span class="error">{$fields->getError('email')}</span>
		<input class="input" type="email" name="email" id="idEmail" value="{$fields->getValue('email')}" required>
		<label class="label" for="idPhone">Phone: </label>
		<span class="error">{$fields->getError('phone')}</span>
		<input class="input" type="tel" id="idPhone" name="phone" value="{$fields->getValue('phone')}" required>
		<label class="label" for="idPassword">Password:</label>
		<span class="error">{$fields->getError('password')}</span>
		<input class="input" type="password" name="password" id="idPassword" value="{$fields->getValue('password')}" required>
		<input class="input" type="file" name="img" accept="image/*">
		<label>&nbsp;</label>
		<input class="button is-primary" type="submit" value="Register">
		<br>
	</fieldset>
	</form>

</main>

{include file='shared/footer.tpl'}