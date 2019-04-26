<?php
/* Smarty version 3.1.30, created on 2018-03-30 14:11:10
  from "/home/ubuntu/workspace/project2/templates/confirmregistration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abe457ef20577_52785712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ec44d7cf8e697718e33b5a0e72a915c21c3c87a' => 
    array (
      0 => '/home/ubuntu/workspace/project2/templates/confirmregistration.tpl',
      1 => 1522419018,
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
function content_5abe457ef20577_52785712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
	<p class="error"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
