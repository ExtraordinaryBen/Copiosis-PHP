<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
	<li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout'] )?></li>
    </ul>
</nav>
<div id="content" class="transactions index large-9 medium-8 columns content">
<h1><?= __('Transactions Overview')  ?></h1>
    <h3><?= __('Transactions Awaiting Your Approval') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= 'transactionID' ?></th>
                <th><?= 'providerID' ?></th>
                <th><?= 'receiverID' ?></th>
                <th><?= 'date' ?></th>
                <th><?= 'productID' ?></th>
                <th><?= 'productGateway' ?></th>
                <th><?= 'productDesc' ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions_need_approval as $transaction): ?>
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

    <h3><?= __('Transactions Awaiting Other Party\'s Approval') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= 'transactionID' ?></th>
                <th><?= 'providerID' ?></th>
                <th><?= 'receiverID' ?></th>
                <th><?= 'date' ?></th>
                <th><?= 'productID' ?></th>
                <th><?= 'productGateway' ?></th>
                <th><?= 'productDesc' ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions_need_approval as $transaction): ?>
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

    <h3><?= __('Completed Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= 'transactionID' ?></th>
                <th><?= 'providerID' ?></th>
                <th><?= 'receiverID' ?></th>
                <th><?= 'date' ?></th>
                <th><?= 'productID' ?></th>
                <th><?= 'productGateway' ?></th>
                <th><?= 'productDesc' ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions_need_approval as $transaction): ?>
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



</div>
