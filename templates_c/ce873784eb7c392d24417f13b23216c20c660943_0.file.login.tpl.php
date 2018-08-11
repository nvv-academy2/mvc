<?php
/* Smarty version 3.1.32, created on 2018-08-11 09:38:36
  from 'C:\xampp\untitled\Views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6e927c9fed82_32033802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce873784eb7c392d24417f13b23216c20c660943' => 
    array (
      0 => 'C:\\xampp\\untitled\\Views\\login.tpl',
      1 => 1533973105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6e927c9fed82_32033802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6937621845b6e927c9faf04_39318026', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'body'} */
class Block_6937621845b6e927c9faf04_39318026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6937621845b6e927c9faf04_39318026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3> Login </h3>
    <form action="/auth/login" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="login" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>

    Have not account? <a href="/auth/register">Register</a>
<?php
}
}
/* {/block 'body'} */
}
