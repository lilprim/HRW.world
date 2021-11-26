<?php
require_once("header.php");
?>

<div class="row">
    <div class="col-6">
        <form class="form-group" action="php/register.php" method="POST">
            <label for="Login">Login</label>
            <input type="text" name="login" class="form-control" id="Login" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
        <div class="col-6">
            <form class="form-group" action="php/login.php" method="POST">
                <label for="LoginRegister">Login</label>
                <input type="text" name="login" class="form-control" id="LoginRegister" placeholder="Login">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control" id="Password" placeholder="Mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</div>

<?php
require_once("footer.php");
?>
