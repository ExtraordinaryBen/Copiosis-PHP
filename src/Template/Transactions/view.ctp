<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->transactionID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->transactionID], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->transactionID)]) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactions view large-9 medium-8 columns content">
    <h3><?= h($transaction->transactionID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('TransactionID') ?></th>
            <td><?= h($transaction->transactionID) ?></td>
        </tr>
        <tr>
            <th><?= __('ProductDesc') ?></th>
            <td><?= h($transaction->productDesc) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($transaction->status) ?></td>
        </tr>
        <tr>
            <th><?= __('ProviderID') ?></th>
            <td><?= $this->Number->format($transaction->providerID) ?></td>
        </tr>
        <tr>
            <th><?= __('ReceiverID') ?></th>
            <td><?= $this->Number->format($transaction->receiverID) ?></td>
        </tr>
        <tr>
            <th><?= __('ProductID') ?></th>
            <td><?= $this->Number->format($transaction->productID) ?></td>
        </tr>
        <tr>
            <th><?= __('ProductGateway') ?></th>
            <td><?= $this->Number->format($transaction->productGateway) ?></td>
        </tr>
        <tr>
            <th><?= __('CreatedBy') ?></th>
            <td><?= $this->Number->format($transaction->createdBy) ?></td>
        </tr>
        <tr>
            <th><?= __('Nbr') ?></th>
            <td><?= $this->Number->format($transaction->nbr) ?></td>
        </tr>
        <tr>
            <th><?= __('Satisfaction') ?></th>
            <td><?= $this->Number->format($transaction->satisfaction) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($transaction->date) ?></td>
        </tr>
        <tr>
            <th><?= __('DateAdded') ?></th>
            <td><?= h($transaction->dateAdded) ?></td>
        </tr>
        <tr>
            <th><?= __('DateClosed') ?></th>
            <td><?= h($transaction->dateClosed) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('ProviderNotes') ?></h4>
        <?= $this->Text->autoParagraph(h($transaction->providerNotes)); ?>
    </div>
    <div class="row">
        <h4><?= __('ReceiverNotes') ?></h4>
        <?= $this->Text->autoParagraph(h($transaction->receiverNotes)); ?>
    </div>
</div>
