{extends file='layout.tpl'}

{block name=body}
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
{/block}