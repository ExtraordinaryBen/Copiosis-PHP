<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->productID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->productID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->productID)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($product->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Uniqueidentifier') ?></th>
            <td><?= h($product->uniqueidentifier) ?></td>
        </tr>
        <tr>
            <th><?= __('ProductID') ?></th>
            <td><?= $this->Number->format($product->productID) ?></td>
        </tr>
        <tr>
            <th><?= __('Gateway') ?></th>
            <td><?= $this->Number->format($product->gateway) ?></td>
        </tr>
        <tr>
            <th><?= __('ItemClass') ?></th>
            <td><?= $this->Number->format($product->itemClass) ?></td>
        </tr>
        <tr>
            <th><?= __('OwnerID') ?></th>
            <td><?= $this->Number->format($product->ownerID) ?></td>
        </tr>
        <tr>
            <th><?= __('CreatedDate') ?></th>
            <td><?= h($product->createdDate) ?></td>
        </tr>
        <tr>
            <th><?= __('DeletedDate') ?></th>
            <td><?= h($product->deletedDate) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
</div>
