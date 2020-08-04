<?= $this->extend('layout/templateauth'); ?>

<?= $this->section('content'); ?>



<form class="user" action="/Auth/register" method="post">
    <?= csrf_field(); ?>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Register Account
    </button>
</form>
<hr>
<div class="text-center">
    <a class="small" href="forgot-password.html">Forgot Password?</a>
</div>
<div class="text-center">
    <a class="small" href="/Auth">Already have an account? Login!</a>
</div>



<?= $this->endsection(); ?>