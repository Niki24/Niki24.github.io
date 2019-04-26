<?php
/* Smarty version 3.1.30, created on 2018-03-01 15:53:53
  from "/home/ubuntu/workspace/project1/templates/recipe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a98221194c5a9_67878133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06d6f2426370fab57b3b0c0a3448a5d44667525' => 
    array (
      0 => '/home/ubuntu/workspace/project1/templates/recipe.tpl',
      1 => 1519919628,
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
function content_5a98221194c5a9_67878133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:shared/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="field">
	<h2 class="title is-1">Recipe</h2>
         
     <h2 class="title is-3"> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <br></h2>
        Calories: <?php echo $_smarty_tpl->tpl_vars['calories']->value;?>
 <br>
        Ingredients: <?php echo $_smarty_tpl->tpl_vars['ingredients']->value;?>
<br>
        Reviews: <br>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['review']->value;?>
<br>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <br>        
	<form method="post" id="addreviewform" action="index.php">
		<input class="input" type="hidden" id="idHidden" name="action" value="add_review" >
		<input class="input" type="hidden" id="idID" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<label class="label" for="idReview">*Review: </label>
		<textarea class="input" cols="150" rows="150" id="idReview" name="review" required="required"></textarea>
        <label class="label" for="idDate">*Date: </label>
		<input class="input" type="date" id="idDate" name="date" placeholder="YYYY-MM-DD" required="required">
		<input type="submit" class="button is-primary" value="Add Review" id="idSubmitReview">
	</form>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
