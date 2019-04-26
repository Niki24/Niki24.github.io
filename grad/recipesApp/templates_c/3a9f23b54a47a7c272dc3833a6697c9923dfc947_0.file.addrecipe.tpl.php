<?php
/* Smarty version 3.1.30, created on 2018-02-27 17:24:31
  from "/home/ubuntu/workspace/project1/templates/addrecipe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a95944fd3bd33_35884054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a9f23b54a47a7c272dc3833a6697c9923dfc947' => 
    array (
      0 => '/home/ubuntu/workspace/project1/templates/addrecipe.tpl',
      1 => 1519675195,
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
function content_5a95944fd3bd33_35884054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="field">
	<h2>Add Recipe</h2>
	<form method="post" id="addrecipeform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="add_recipe" >
		<label class="label" for="idName">*Name: </label>
		<input class="input" type="text" id="idName" name="name"  required="required">
		<label class="label" for="idIngredients">*Ingredients: </label>
		<textarea class="input" cols="150" rows="50" id="idIngredients" name="ingredients" required="required"></textarea>
		<label class="label" for="idCalories">*Calories: </label>
		<input class="input" type="number" id="idCalories" name="calories" required="required">

		<input type="submit" class="button is-primary" value="Add" id="idSubmitAdd">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
