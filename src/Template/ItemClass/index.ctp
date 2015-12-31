<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Item Clas'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemClass index large-9 medium-8 columns content">
    <h3><?= __('Item Class') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('classID') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('suggestedGateway') ?></th>
                <th><?= $this->Paginator->sort('cPdb') ?></th>
                <th><?= $this->Paginator->sort('a') ?></th>
                <th><?= $this->Paginator->sort('aMax') ?></th>
                <th><?= $this->Paginator->sort('d') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemClass as $itemClas): ?>
            <tr>
                <td><?= $this->Number->format($itemClas->classID) ?></td>
                <td><?= h($itemClas->name) ?></td>
                <td><?= $this->Number->format($itemClas->suggestedGateway) ?></td>
                <td><?= $this->Number->format($itemClas->cPdb) ?></td>
                <td><?= $this->Number->format($itemClas->a) ?></td>
                <td><?= $this->Number->format($itemClas->aMax) ?></td>
                <td><?= $this->Number->format($itemClas->d) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemClas->classID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemClas->classID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemClas->classID], ['confirm' => __('Are you sure you want to delete # {0}?', $itemClas->classID)]) ?>
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
