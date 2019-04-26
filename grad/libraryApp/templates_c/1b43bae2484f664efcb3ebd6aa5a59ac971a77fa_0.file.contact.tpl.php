<?php
/* Smarty version 3.1.30, created on 2018-03-26 16:42:37
  from "/home/ubuntu/workspace/project2/templates/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab922fd3ab972_54295272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b43bae2484f664efcb3ebd6aa5a59ac971a77fa' => 
    array (
      0 => '/home/ubuntu/workspace/project2/templates/contact.tpl',
      1 => 1522082553,
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
function content_5ab922fd3ab972_54295272 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home/ubuntu/workspace/project2/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="field">
	<h2 class="title is-1">Contact Us</h2>
	<form method="post" id="contactform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="process_contact_form" >
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('name');?>
</span>
		<label class="label" for="idName">* Name: </label>
		<input class="input" type="text" id="idName" name="name" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('name');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('email');?>
</span>
		<label class="label" for="idEmail">* E-mail: </label>
		<input class="input" type="email" id="idEmail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('email');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('phone');?>
</span>
		<label class="label" for="idPhone">Phone: </label>
		<input class="input" type="tel" id="idPhone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('phone');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('date');?>
</span>
		<label class="label" for="idDate">Date: </label>
		<input class="input" type="date" id="idDate" name="date" "<?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('date');?>
">
		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('libraryID');?>
</span>
		<label class="label" for="idLibraries">Select Library:</label>
		<?php ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value->getValue('libraryID');
$_prefixVariable1=ob_get_clean();
echo smarty_function_html_options(array('name'=>'library','options'=>$_smarty_tpl->tpl_vars['libraries']->value,'selected'=>$_prefixVariable1,'id'=>"idLibraries"),$_smarty_tpl);?>

		<span class="error"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getError('comments');?>
</span>
		<label class="label" for="idComments">* Comments: </label>
		<textarea class="input" id="myComments" name="comments" rows="2" cols="20"><?php echo $_smarty_tpl->tpl_vars['fields']->value->getValue('comments');?>
</textarea>
		<input class="button is-primary" type="submit" value="Send Now" id="idSubmit">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
