<?php
/* Smarty version 3.1.30, created on 2018-02-27 02:40:19
  from "/home/ubuntu/workspace/project1/templates/shared/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a94c513b63924_78428244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22073c5584d17a49d59fbf010c89888a68014feb' => 
    array (
      0 => '/home/ubuntu/workspace/project1/templates/shared/nav.tpl',
      1 => 1519665622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a94c513b63924_78428244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
   		 <a class="navbar-item" href="index.php">
     	 	<img src="templates/images/logo-fork-spoon_355-459.jpg" alt="Peruvian Food Recipes" >
    	 </a>

		<a class="navbar-item" href="index.php?action=show_home_page">Home</a>  
		<a class="navbar-item" href="index.php?action=show_catalog_page">Recipes</a> 
		<a class="navbar-item" href="index.php?action=show_contact_page">Contact</a> 
  </div>
</nav><?php }
}
