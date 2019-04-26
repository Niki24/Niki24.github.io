<?php
/* Smarty version 3.1.30, created on 2018-03-31 21:21:54
  from "/home/ubuntu/workspace/project2/templates/registration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abffbf22a7082_29758253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16280667d493ce27e5f7b777ff1224c82c31c015' => 
    array (
      0 => '/home/ubuntu/workspace/project2/templates/registration.tpl',
      1 => 1522531245,
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
function content_5abffbf22a7082_29758253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
	<h2>Registration</h2>
	
	<form action="." id="registrationform" method="post">
	<input type="hidden" id="idHidden" name="action" value="process_registration_form" >
	<fieldset>
        <label class="label" for="fname">* First Name: </label>
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('fname');?>
</span>
		<input class="input" type="text" id="idfName" name="fname" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('fname');?>
" required>
		<label class="label" for="lname">* Last Name: </label>
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('lname');?>
</span>
		<input class="input" type="text" id="idlName" name="lname" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('lname');?>
" required>
		<label class="label" for="idEmail">Email:</label>
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('email');?>
</span>
		<input class="input" type="email" name="email" id="idEmail" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('email');?>
" required>
		<label class="label" for="idPhone">Phone: </label>
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('phone');?>
</span>
		<input class="input" type="tel" id="idPhone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('phone');?>
" required>
		<label class="label" for="idPassword">Password:</label>
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('password');?>
</span>
		<input class="input" type="password" name="password" id="idPassword" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('password');?>
" required>
		<input class="input" type="file" name="img" accept="image/*">
		<label>&nbsp;</label>
		<input class="button is-primary" type="submit" value="Register">
		<br>
	</fieldset>
	</form>

</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
