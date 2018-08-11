<?php
/* Smarty version 3.1.32, created on 2018-08-11 10:45:16
  from 'C:\xampp\untitled\Views\admin\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6ea21c811cc0_75325439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b3fbeac0121832abb34118fe3b255471951a302' => 
    array (
      0 => 'C:\\xampp\\untitled\\Views\\admin\\categories.tpl',
      1 => 1533977115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6ea21c811cc0_75325439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3604432385b6ea21c806146_84563338', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'body'} */
class Block_3604432385b6ea21c806146_84563338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3604432385b6ea21c806146_84563338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Update</th>
            <th>Remove</th>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <tr>
                <form method="POST" action="/admin/category/update/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
</td>
                    <td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" class="form-control"></td>
                    <td><input type="number" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['weight'];?>
" class="form-control"></td>
                    <td><input type="submit" value="UPDATE" class="btn btn-warning"></td>
                </form>
                <td>
                    <a href="/admin/category/remove/<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="btn btn-danger">Remove</a>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <h3>Create new:</h3>
    <form action="/admin/category/create" method="POST" style="width: 300px">
        <input type="text" name="name" placeholder="Category name" class="form-control">
        <input type="number" name="weight" placeholder="Category weight" class="form-control">
        <input type="submit" class="btn btn-success" value="Create">
    </form>
<?php
}
}
/* {/block 'body'} */
}
