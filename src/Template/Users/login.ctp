<div id="content" style="width:100%;">
<div id="login-form" style="width:400px;margin:auto;text-align:center;">
<h1>Copiosis Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('username') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
<?php echo $this->Html->link(
    'Register',
    ['controller' => 'Users', 'action' => 'add']
) . ' if you do not have an account.'; ?>
</div>
</div>
