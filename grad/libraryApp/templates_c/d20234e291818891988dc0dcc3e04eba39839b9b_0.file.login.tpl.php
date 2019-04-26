<?php
/* Smarty version 3.1.30, created on 2018-03-31 17:09:40
  from "/home/ubuntu/workspace/project2/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abfc0d4498594_30093351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20234e291818891988dc0dcc3e04eba39839b9b' => 
    array (
      0 => '/home/ubuntu/workspace/project2/templates/login.tpl',
      1 => 1522516161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shared/head.tpl' => 1,
    'file:shared/header.tpl' => 1,
    'file:shared/nav.tpl' => 1,
    'file:shared/footer.tpl' => 1,
  ),
),false)) {
function content_5abfc0d4498594_30093351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Login</h2>
	
	
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
	<p class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>
	
	
	<form action="." id="register" method="post"> 
	<fieldset>
        <legend>User Registration</legend>
        <input class="input" type="hidden" name="action" value="show_registration_page">
		<label class="label" for"idRegister">Not yet a user?</label>
		<input class="button is-primary" type="submit" value="Register" id="idRegister">
	</fieldset>
 	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
