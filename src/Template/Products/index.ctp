<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('productID') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('gateway') ?></th>
                <th><?= $this->Paginator->sort('itemClass') ?></th>
                <th><?= $this->Paginator->sort('createdDate') ?></th>
                <th><?= $this->Paginator->sort('deletedDate') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->productID) ?></td>
                <td><?= h($product->type) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $this->Number->format($product->gateway) ?></td>
                <td><?= $this->Number->format($product->itemClass) ?></td>
                <td><?= h($product->createdDate) ?></td>
                <td><?= h($product->deletedDate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->productID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->productID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->productID], ['confirm' => __('Are you sure you want to delete # {0}?', $product->productID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
