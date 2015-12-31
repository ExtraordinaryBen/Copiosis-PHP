<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="location index large-9 medium-8 columns content">
    <h3><?= __('Location') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('locationID') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('state') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('neighborhood') ?></th>
                <th><?= $this->Paginator->sort('signupKey') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($location as $location): ?>
            <tr>
                <td><?= $this->Number->format($location->locationID) ?></td>
                <td><?= h($location->country) ?></td>
                <td><?= h($location->state) ?></td>
                <td><?= h($location->city) ?></td>
                <td><?= h($location->neighborhood) ?></td>
                <td><?= h($location->signupKey) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $location->locationID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->locationID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->locationID], ['confirm' => __('Are you sure you want to delete # {0}?', $location->locationID)]) ?>
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
