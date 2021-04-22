<?php
/* Smarty version 3.1.39, created on 2021-04-19 18:38:09
  from 'C:\xampp\htdocs\Zadanie_BD\Smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607db1f13662d0_71761642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a26523f4930ecb3e42398686d0a570128a8d7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_BD\\Smarty\\templates\\index.tpl',
      1 => 1618827626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_607db1f13662d0_71761642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row mt-5">
    <div class="col-12 mb-3">
        <h1 class="text-center">Szachy</h1>
    </div>
    <div class="col-6">
        <a href="index.php?action=register">
            <button class="btn btn-primary w-100">Rejestracja</button>
        </a>

    </div>
    <div class="col-6">
        <a href="index.php?action=login">
            <button class="btn btn-primary w-100">Login</button>
        </a>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
