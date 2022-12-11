<?php
/* Smarty version 4.3.0, created on 2022-12-10 02:55:05
  from 'C:\xampp\htdocs\projeto-smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6393e6f9b4f9b8_84989185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f840fd9de40b10f99a5274395b72e2ed3c443aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projeto-smarty\\templates\\index.tpl',
      1 => 1670637282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6393e6f9b4f9b8_84989185 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <h2><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</h2>

    <h3>Arrays</h3>

    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['frutas']->value, 'fruta');
$_smarty_tpl->tpl_vars['fruta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fruta']->value) {
$_smarty_tpl->tpl_vars['fruta']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['fruta']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['atletas']->value, 'atleta');
$_smarty_tpl->tpl_vars['atleta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['atleta']->value) {
$_smarty_tpl->tpl_vars['atleta']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['atleta']->value['nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['atleta']->value['esporte'];?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <h3>Object</h3>

    <p><?php echo $_smarty_tpl->tpl_vars['jogador']->value->nome;?>
 - <?php echo $_smarty_tpl->tpl_vars['jogador']->value->idade;?>
</p>

    <h3>acessando informacoes GET, POST, SESSION, COOKIES</h3>
    <p><?php echo $_GET['nome'];?>
</p>

</body>
</html><?php }
}
