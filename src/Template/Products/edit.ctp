<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->productID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->productID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('gateway');
            echo $this->Form->input('itemClass');
            echo $this->Form->input('createdDate');
            echo $this->Form->input('deletedDate');
            echo $this->Form->input('ownerID');
            echo $this->Form->input('uniqueidentifier');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
