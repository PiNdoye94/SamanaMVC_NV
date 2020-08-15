<?php
/* Smarty version 3.1.30, created on 2020-08-15 11:03:45
  from "C:\wamp64\www\PHPBDP\frameworks\samanemvc\src\view\welcome\accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f37c111098137_78424496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b1497297ee097c2a098afd1c260e58dd6544805' => 
    array (
      0 => 'C:\\wamp64\\www\\PHPBDP\\frameworks\\samanemvc\\src\\view\\welcome\\accueil.html',
      1 => 1596726235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f37c111098137_78424496 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Banque du Peuple</title>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/style.css"/>
    </head>
    <boby>
        <header>
            <div id="logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logobp.png"/>
            </div>
            <div id="welcome">
                <h1>BIENVENUE DANS LA BANQUE DU PEUPLE !!</h1>
            </div>
        </header>
        <h2>VEUILLEZ SELECTIONNER LE TYPE DE CLIENT A AJOUTER</h2>
        <div id="container">
            <div class="type">
                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientSalarie">CLIENT SALARIE</a></h3>
            </div>
            <div class="type">
                <h3><a href="src/view/nonsalarie.php">CLIENT NON SALARIE</a></h3>
            </div>
            <div class="type">
                <h3><a href="src/view/moral.php">CLIENT MORAL</a></h3>
            </div>
        </div>
    </boby>
</html><?php }
}
