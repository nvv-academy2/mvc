<?php
/* Smarty version 3.1.32, created on 2018-08-11 10:06:36
  from 'C:\xampp\untitled\Views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6e990ce93240_39448213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52e770e355b646281d01d325ee9b0219939b252' => 
    array (
      0 => 'C:\\xampp\\untitled\\Views\\register.tpl',
      1 => 1533972986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6e990ce93240_39448213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15633324115b6e990ce8f3c0_35991975', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'body'} */
class Block_15633324115b6e990ce8f3c0_35991975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15633324115b6e990ce8f3c0_35991975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3> Register </h3>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success">Register</button>
    </form>

    Have not account? <a href="/auth/login">Login</a>
<?php
}
}
/* {/block 'body'} */
}
