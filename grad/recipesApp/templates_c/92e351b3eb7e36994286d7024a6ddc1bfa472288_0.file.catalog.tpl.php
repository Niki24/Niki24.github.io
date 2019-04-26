<?php
/* Smarty version 3.1.30, created on 2018-03-26 20:37:20
  from "/home/ubuntu/workspace/project1/templates/catalog.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab95a006a5d50_82645258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e351b3eb7e36994286d7024a6ddc1bfa472288' => 
    array (
      0 => '/home/ubuntu/workspace/project1/templates/catalog.tpl',
      1 => 1522082937,
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
function content_5ab95a006a5d50_82645258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<main id="catalog">
    <h2 class="title is-1">Catalog of Recipes</h2>
    <table class="table ">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recipes_catalog']->value, 'recipe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['recipe']->value) {
?>
		<tr>
			<td>
				<form action="index.php" id="editform" method="post">
                    <input type="hidden" name="action" value="edit_recipe_form">
                    <input type="hidden" name="recipe_id" value="<?php echo $_smarty_tpl->tpl_vars['recipe']->value->getID();?>
">
                    <input class="button is-primary" type="submit" value="Edit" id="idSubmitEdit">
                </form>
                <form action="index.php" id="deleteform" method="post">
                    <input type="hidden" name="action" value="delete_recipe_form">
                    <input type="hidden" name="recipe_id" value="<?php echo $_smarty_tpl->tpl_vars['recipe']->value->getID();?>
">
                    <input class="button is-primary" type="submit" value="Delete" id="idSubmitDelete">
                </form>
			</td>
			<td>
				<img src="<?php echo $_smarty_tpl->tpl_vars['recipe']->value->getImage();?>
/default.jpg" alt="Cover Image" width="100">
			</td>
			<td>
				     <form action="index.php?action=show_recipe_page" id="showrecipepage" method="post">
                     <input type="hidden" name="action" value="show_recipe_page">
                     <input type="hidden" name="recipe_id" value="<?php echo $_smarty_tpl->tpl_vars['recipe']->value->getID();?>
">
                     <input type="hidden" name="reviews">
                     <input class="button is-text" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['recipe']->value->getName();?>
" id="idSubmitRecipe">
                   </form>
                    &nbsp; &nbsp;Calories: <?php echo $_smarty_tpl->tpl_vars['recipe']->value->getCalories();?>

			</td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	<form action="index.php" id="addform" method="post">
		<input type="hidden" name="action" value="add_recipe_form">
		<input class="button is-primary" type="submit" value="Add New Recipe" id="idSubmitAdd">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
