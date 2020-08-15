<?php
/* Smarty version 3.1.30, created on 2020-08-15 12:13:53
  from "C:\wamp64\www\PHPBDP\frameworks\samanemvc\src\view\welcome\accueilbanque.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f37d1813a20f6_09622822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fcf5fca12a6c0ec34083341f87b3e58ed354beb' => 
    array (
      0 => 'C:\\wamp64\\www\\PHPBDP\\frameworks\\samanemvc\\src\\view\\welcome\\accueilbanque.html',
      1 => 1597493538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f37d1813a20f6_09622822 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Accueil</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/styles.css">
	<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/b99e675b6e.js"><?php echo '</script'; ?>
>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			<div class="backdrop"></div>
			<div class="vertical_bar">
				<div class="profile_info">
					<div class="img_holder">
						<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/lol.png" alt="profile_pic">
					</div>
					<p class="title">Responsable Compte</p>
					<p class="sub_title">papisndoye218@gmail.com</p>
				</div>
				<ul class="menu">
					<li><a href="#" class="active">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Accueil</span>
					</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientSalarie">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Salarié</span>
					</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientParticulier">
						<span class="icon"><i class="fas fa-user"></i></span>
						<span class="text">Particulier</span>
					</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientMoral">
						<span class="icon"><i class="fas fa-chart-pie"></i></span>
						<span class="text">Moral</span>
					</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
GestionClients">
						<span class="icon"><i class="fas fa-cog"></i></span>
						<span class="text">Gestion Clients</span>
					</a></li>
				</ul>

				<h3 class="out"><a href="" >Deconnexion</a></h3>
			</div>
		</div>
		<div class="main_container">
			<div class="top_bar">
				<div class="hamburger">
					<i class="fas fa-bars"></i>
				</div>
				<div class="logo">
					ACCUEIL <span></span>
				</div>
			</div>

			<div class="container">
				<div class="content">
					<div class="item">
		                <div class="donneesClient" style="text-align: center;">
		                    <input type="search" name="recherche_client" class="btn_search"placeholder="ID client"/>
		                    <input type="button" name="bouton_de_recherche" class="btn_search" value="Rechercher"/>
		                </div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

<?php echo '<script'; ?>
>
	var hamburger = document.querySelector(".hamburger");
	var wrapper  = document.querySelector(".wrapper");
	var backdrop = document.querySelector(".backdrop");

	hamburger.addEventListener("click", function(){
		wrapper.classList.add("active");
	})

	backdrop.addEventListener("click", function(){
		wrapper.classList.remove("active");
	})
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
