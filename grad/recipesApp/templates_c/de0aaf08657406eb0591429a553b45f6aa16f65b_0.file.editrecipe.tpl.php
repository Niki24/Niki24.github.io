<?php
/* Smarty version 3.1.30, created on 2018-02-27 03:44:15
  from "/home/ubuntu/workspace/project1/templates/editrecipe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a94d40f6d9e84_03886366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0aaf08657406eb0591429a553b45f6aa16f65b' => 
    array (
      0 => '/home/ubuntu/workspace/project1/templates/editrecipe.tpl',
      1 => 1519699968,
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
function content_5a94d40f6d9e84_03886366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="field">
	<h2 class="title is-1">Update Recipe</h2>
	<form method="post" id="editrecipeform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="update_recipe" >
		<input class="input" type="hidden" id="idID" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<label class="label" for="idName">*Name: </label>
		<input class="input" type="text" id="idName" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" required="required">
		<label class="label" for="idIngredients">*Ingredients: </label>
		<input class="input" type="text" id="idIngredients" name="ingredients" value="<?php echo $_smarty_tpl->tpl_vars['ingredients']->value;?>
" required="required">
		<label class="label" for="idCalories">*Calories: </label>
		<input class="input"  type="number" id="idCalories" name="calories" value="<?php echo $_smarty_tpl->tpl_vars['calories']->value;?>
" required="required">

		<input type="submit" class="button is-primary" value="Update" id="idSubmit">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
