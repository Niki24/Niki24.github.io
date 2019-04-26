{include file='shared/head.tpl'}
{include file='shared/header.tpl'}
{include file='shared/nav.tpl'}

<main>
	<h2 class="title is-1">Welcome to the Little Library</h2>
	<img src="templates/images/library.jpg" alt="image of empty library" width="516" height="540">
	
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
	
	<form action="." id="register" method="post">
		<input type="hidden" name="action" value="show_registration_page">
	<fieldset>
        <legend>User Registration</legend>
		<label class="label" for="idRegister">Not yet a user?</label>
		<input class="button is-primary" type="submit" value="Register">
	</fieldset>
	</form>
</main>

{include file='shared/footer.tpl'}