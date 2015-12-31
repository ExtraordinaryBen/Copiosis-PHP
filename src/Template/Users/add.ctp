<div id="content" style="width:100%;">
<div class="products form large-9 medium-8 content" style="width:400px;margin:auto;padding:0px;">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <h3>New User Registration</h3>
	
        <?php
            echo $this->Form->input('firstName');
            echo $this->Form->input('lastName');
            echo $this->Form->input('email');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('confirm_password', ['type' => 'password', 'required' => true]);
            echo $this->Form->input('token', ['required' => true]);
            echo $this->Form->hidden('status', ['value' => 1]);
            echo $this->Form->hidden('locationID', ['value' => 1]);
            echo $this->Form->hidden('nbr', ['value' => 0]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
