<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form class="user" method="POST" action="<?= base_url('auth/sign_up'); ?>">
            <h1>Sign Up</h1>
            <input type="text" placeholder="Name" id="name" name="name" value="<?= set_value('name'); ?>" />
            <?= form_error('name', '<small class="text-required pl-3">', '</small>'); ?>
            <input type="text" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>" />
            <?= form_error('email', '<small class="text-required pl-3">', '</small>'); ?>
            <input type="password" placeholder="Password" id="password1" name="password1" />
            <?= form_error('password1', '<small class="text-required pl-3">', '</small>'); ?>
            <input type="password" placeholder="Retype Password" id="password2" name="password2" />
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form lass="user" method="POST" action="<?= base_url('auth'); ?>">
            <h1>Sign In</h1>
            <?= $this->session->flashdata('message'); ?>
            <input type="text" placeholder="Email" id="emaildb" name="emaildb" value="<?= set_value('emaildb'); ?>" />
            <?= form_error('emaildb', '<small class="text-required pl-3">', '</small>'); ?>
            <input type="password" placeholder="Password" id="password" name="password" />
            <?= form_error('password', '<small class="text-required pl-3">', '</small>'); ?>
            <button type="submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start your journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>Please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
        </div>
    </div>
</div>