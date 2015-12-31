<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="transactions form large-9 medium-8 columns content">
    <?= $this->Form->create($transaction) ?>
    <fieldset>
        <legend><?= __('Add Transaction') ?></legend>
        <?php
            echo $this->Form->input('providerID');
            echo $this->Form->input('providerNotes');
            echo $this->Form->input('receiverID');
            echo $this->Form->input('receiverNotes');
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('productID');
            echo $this->Form->input('productGateway');
            echo $this->Form->input('productDesc');
            echo $this->Form->input('status');
            echo $this->Form->input('dateAdded');
            echo $this->Form->input('createdBy');
            echo $this->Form->input('dateClosed');
            echo $this->Form->input('nbr');
            echo $this->Form->input('satisfaction');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
