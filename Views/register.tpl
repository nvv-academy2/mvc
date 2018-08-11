{extends file='layout.tpl'}

{block name=body}
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
{/block}