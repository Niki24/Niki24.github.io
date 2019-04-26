<?php
/* Smarty version 3.1.30, created on 2018-03-31 18:22:20
  from "/home/ubuntu/workspace/project2/templates/shared/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abfd1dc9fb3d6_99766802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045000c0ba8b7560a5d49a6bfe0e9027b6c1ea75' => 
    array (
      0 => '/home/ubuntu/workspace/project2/templates/shared/nav.tpl',
      1 => 1522519740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abfd1dc9fb3d6_99766802 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="index.php">
				<a class="navbar-item" href="index.php?action=show_home_page">Home</a> 
				<a class="navbar-item" href="index.php?action=show_catalog_page">Catalog</a>
				<a class="navbar-item" href="index.php?action=show_locations_page">Locations</a> 
				<a class="navbar-item" href="index.php?action=show_contact_page">Contact</a>
				<a class="navbar-item" href="index.php?action=login_logout">
					<?php if (isset($_SESSION['user'])) {?>
						<?php echo $_SESSION['user'];?>
<img src="templates/images/profil.png">
						<?php echo (($tmp = @$_smarty_tpl->tpl_vars['logInOut']->value)===null||$tmp==='' ? 'Logout' : $tmp);?>

							<?php } else { ?>  <img src="templates/images/profile.png">
							
						<?php echo (($tmp = @$_smarty_tpl->tpl_vars['logInOut']->value)===null||$tmp==='' ? 'Login' : $tmp);?>

				<a class="navbar-item" href="index.php?action=show_registration_page">Register</a>
					<?php }?>
				</a>
	</div>
</nav>
<?php }
}
