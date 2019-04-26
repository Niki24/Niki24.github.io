{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2>Thank you! You're account has been created. Please sign in below.</h2>
<p>
	<form action="." id="loginform" method="post">
	<fieldset>
        <legend>User Login</legend>
        <input class="input" type="hidden" name="action" value="login_user">
		<label class="label" for="idEmail">Email:</label>
		<input class="input" type="text" name="email" id="idEmail"  required>
		<label class="label" for="idPassword">Password:</label>
		<input class="input" type="password" name="password" id="idPassword"  required>
		
		<label>&nbsp;</label>
		<input class="button is-primary" type="submit" value="Login">
		<br>
	</fieldset>
	</form>
	<p class="error">{$message|default:''}</p>
</main>

{include file='shared/footer.tpl'}