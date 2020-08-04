<?= $this->extend('layout/templateauth'); ?>

<?= $this->section('content'); ?>



<form class="user">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Enter Email Address...">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Login
    </button>
    <hr>
</form>
<div class="text-center">
    <a class="small" href="forgot-password.html">Forgot Password?</a>
</div>
<div class="text-center">
    <a class="small" href="Auth/registration">Create an Account!</a>
</div>



<?= $this->endSection();  ?>