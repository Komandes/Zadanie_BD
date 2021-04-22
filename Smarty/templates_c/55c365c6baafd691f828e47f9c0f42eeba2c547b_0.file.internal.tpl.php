<?php
/* Smarty version 3.1.39, created on 2021-04-19 18:38:13
  from 'C:\xampp\htdocs\Zadanie_BD\Smarty\templates\internal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607db1f5eaf561_67530480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c365c6baafd691f828e47f9c0f42eeba2c547b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_BD\\Smarty\\templates\\internal.tpl',
      1 => 1618825245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_607db1f5eaf561_67530480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row mt-5">
            <div class="col-4 offset-4">
                <p>Id urzytkownika: <?php echo $_smarty_tpl->tpl_vars['ID']->value;?>

                <p>Email urzytkownika: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="logout">
                    <button type="submit" class="btn btn-primary">Wyloguj</button>
                </form>
                
            </div>
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
