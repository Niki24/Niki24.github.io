<nav class="navbar" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item" href="index.php">
				<a class="navbar-item" href="index.php?action=show_home_page">Home</a> 
				<a class="navbar-item" href="index.php?action=show_catalog_page">Catalog</a>
				<a class="navbar-item" href="index.php?action=show_locations_page">Locations</a> 
				<a class="navbar-item" href="index.php?action=show_contact_page">Contact</a>
				<a class="navbar-item" href="index.php?action=login_logout">
					{if isset($smarty.session.user)  }
						{$smarty.session.user}<img src="templates/images/profil.png">
						{$logInOut|default:'Logout'}
							{else}  <img src="templates/images/profile.png">
							
						{$logInOut|default:'Login'}
				<a class="navbar-item" href="index.php?action=show_registration_page">Register</a>
					{/if}
				</a>
	</div>
</nav>
