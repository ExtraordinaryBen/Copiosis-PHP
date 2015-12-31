<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->select('itemClass');
            echo $this->Form->radio('type',[
            ['value' => 'product', 'text' => 'Product'],
            ['value' => 'service', 'text' => 'Service'],
            ]);
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('gateway');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
