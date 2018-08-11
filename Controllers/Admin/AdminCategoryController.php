<?php

class AdminCategoryController
{
    public function index()
    {
        global $smarty;
        $smarty->assign('categories', CategoryModel::getAll());
        $smarty->display("admin/categories.tpl");
    }

    public function update()
    {
        global $params;
        $id = (int) array_shift($params);

        if (!isset($_POST['weight']) || !isset($_POST['name']))
        {
            header("Location: /admin/category?error=wrong data provided");
            exit;
        }

        $name = $_POST['name'];
        $weight = $_POST['weight'];

        $category = CategoryModel::findById($id);
        if (!$category) {
            header("Location: /admin/category?error=Category with id = $id does not exist");
            exit;
        }

        $category->setName($name)->setWeight($weight)->save();
        header("Location: /admin/category");
    }

    public function remove()
    {
        global $params;
        $id = (int) array_shift($params);

        $category = CategoryModel::findById($id);
        if (!$category) {
            header("Location: /admin/category?error=Category with id = $id does not exist");
            exit;
        }

        $category->delete();
        header("Location: /admin/category");
    }

    public function create()
    {
        if (!isset($_POST['weight']) || !isset($_POST['name']))
        {
            header("Location: /admin/category?error=wrong data provided");
            exit;
        }

        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $category = new CategoryModel();
        $category
            ->setName($name)
            ->setWeight($weight)
            ->save();

        header("Location: /admin/category");
    }
}