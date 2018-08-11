<?php
/* Smarty version 3.1.32, created on 2018-08-11 10:28:20
  from 'C:\xampp\untitled\Views\admin\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6e9e24630dd9_46684857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907743b90bdfd4ccb16949c731606dcd52a3cec2' => 
    array (
      0 => 'C:\\xampp\\untitled\\Views\\admin\\main.tpl',
      1 => 1533976099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6e9e24630dd9_46684857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9615623055b6e9e2462cf58_13170334', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layout.tpl');
}
/* {block 'body'} */
class Block_9615623055b6e9e2462cf58_13170334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9615623055b6e9e2462cf58_13170334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="/admin/category"> Categories </a>
<?php
}
}
/* {/block 'body'} */
}
