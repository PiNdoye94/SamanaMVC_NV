<?php
/* Smarty version 3.1.30, created on 2020-08-15 17:35:28
  from "C:\wamp64\www\PHPBDP\frameworks\samanemvc\src\view\gestion\gestionclients.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f381ce0a1b798_08518489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ebfff9cfa6eb4abf0bddad3bc2cd80a5deeb4d' => 
    array (
      0 => 'C:\\wamp64\\www\\PHPBDP\\frameworks\\samanemvc\\src\\view\\gestion\\gestionclients.html',
      1 => 1597512744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f381ce0a1b798_08518489 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
	table{
		width: 700px;
	}
	th{
		text-align: left;
	}
	table, th, td{
		border: 1px solid #000;
		border-collapse: collapse;
	}
	th, td{
		padding: 6px;
	}
	.searchcommpte{
		margin-bottom: 25px;
		
	}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion Clients Bancaire</title>
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
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Welcome">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span class="text">Accueil</span>
					</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ClientSalarie">
						<span class="icon"><i class="fas fa-user" ></i></span>
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
					<li><a href="#" class="active">
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
					GESTION <span>CLIENTS</span>
				</div>
			</div>

			<div class="container">
				<div class="content">
					<div class="item">
						<div class="searchcommpte" style="text-align: center;">
		                    <input type="search" name="recherche_client" class="btn_search"placeholder="N° Compte"/>
		                    <input type="button" name="bouton_de_recherche" class="btn_search" value="Rechercher"/>
		                </div>
						
								<table>
									<tr>
										<th>ID client</th>
										<th>Type client</th>
										<th>Nom</th>
										<th>Prenom</th>
										<th>N° Compte</th>
										<th>Etat Compte</th>
									</tr>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeClients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
</td>
											<td>Salarié</td>
											<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</td>
											<td>Papis</td>
											<td>123415241235</td>
											<td>
												<select>
													<option>Actif</option>
													<option>Bloqué</option>
												</select>
											</td>
											
											<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
GestionClients/delete">Supprimer</a></td>
											
											<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
GestionClients/update">Mise à jour</a></td>
										</tr>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</table>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

<?php echo '<script'; ?>
 src="">
	
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
