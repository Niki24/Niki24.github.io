<?php
/* Smarty version 3.1.30, created on 2018-03-01 17:18:35
  from "/home/ubuntu/workspace/project1/templates/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9835eb0cd2a7_15935612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '181a1828b30bcf7a7880e3aa916348139d7142a1' => 
    array (
      0 => '/home/ubuntu/workspace/project1/templates/contact.tpl',
      1 => 1519924711,
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
function content_5a9835eb0cd2a7_15935612 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
