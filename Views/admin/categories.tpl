{extends file='layout.tpl'}

{block name=body}
    <table class="table table-bordered">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Update</th>
            <th>Remove</th>
        </thead>
        <tbody>
        {foreach $categories as $category}
            <tr>
                <form method="POST" action="/admin/category/update/{$category['id']}">
                    <td>{$category['id']}</td>
                    <td><input type="text" name="name" value="{$category['name']}" class="form-control"></td>
                    <td><input type="number" name="weight" value="{$category['weight']}" class="form-control"></td>
                    <td><input type="submit" value="UPDATE" class="btn btn-warning"></td>
                </form>
                <td>
                    <a href="/admin/category/remove/{$category['id']}" class="btn btn-danger">Remove</a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <h3>Create new:</h3>
    <form action="/admin/category/create" method="POST" style="width: 300px">
        <input type="text" name="name" placeholder="Category name" class="form-control">
        <input type="number" name="weight" placeholder="Category weight" class="form-control">
        <input type="submit" class="btn btn-success" value="Create">
    </form>
{/block}