<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactions index large-9 medium-8 columns content">
    <h3><?= __('Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('transactionID') ?></th>
                <th><?= $this->Paginator->sort('providerID') ?></th>
                <th><?= $this->Paginator->sort('receiverID') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('productID') ?></th>
                <th><?= $this->Paginator->sort('productGateway') ?></th>
                <th><?= $this->Paginator->sort('productDesc') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= h($transaction->transactionID) ?></td>
                <td><?= $this->Number->format($transaction->providerID) ?></td>
                <td><?= $this->Number->format($transaction->receiverID) ?></td>
                <td><?= h($transaction->date) ?></td>
                <td><?= $this->Number->format($transaction->productID) ?></td>
                <td><?= $this->Number->format($transaction->productGateway) ?></td>
                <td><?= h($transaction->productDesc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->transactionID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->transactionID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaction->transactionID], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->transactionID)]) ?>
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
