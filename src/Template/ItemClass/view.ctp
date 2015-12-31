<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item Clas'), ['action' => 'edit', $itemClas->classID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item Clas'), ['action' => 'delete', $itemClas->classID], ['confirm' => __('Are you sure you want to delete # {0}?', $itemClas->classID)]) ?> </li>
        <li><?= $this->Html->link(__('List Item Class'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item Clas'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemClass view large-9 medium-8 columns content">
    <h3><?= h($itemClas->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($itemClas->name) ?></td>
        </tr>
        <tr>
            <th><?= __('ClassID') ?></th>
            <td><?= $this->Number->format($itemClas->classID) ?></td>
        </tr>
        <tr>
            <th><?= __('SuggestedGateway') ?></th>
            <td><?= $this->Number->format($itemClas->suggestedGateway) ?></td>
        </tr>
        <tr>
            <th><?= __('CPdb') ?></th>
            <td><?= $this->Number->format($itemClas->cPdb) ?></td>
        </tr>
        <tr>
            <th><?= __('A') ?></th>
            <td><?= $this->Number->format($itemClas->a) ?></td>
        </tr>
        <tr>
            <th><?= __('AMax') ?></th>
            <td><?= $this->Number->format($itemClas->aMax) ?></td>
        </tr>
        <tr>
            <th><?= __('D') ?></th>
            <td><?= $this->Number->format($itemClas->d) ?></td>
        </tr>
        <tr>
            <th><?= __('APrime') ?></th>
            <td><?= $this->Number->format($itemClas->aPrime) ?></td>
        </tr>
        <tr>
            <th><?= __('CCb') ?></th>
            <td><?= $this->Number->format($itemClas->cCb) ?></td>
        </tr>
        <tr>
            <th><?= __('M1') ?></th>
            <td><?= $this->Number->format($itemClas->m1) ?></td>
        </tr>
        <tr>
            <th><?= __('PO') ?></th>
            <td><?= $this->Number->format($itemClas->pO) ?></td>
        </tr>
        <tr>
            <th><?= __('M2') ?></th>
            <td><?= $this->Number->format($itemClas->m2) ?></td>
        </tr>
        <tr>
            <th><?= __('CEb') ?></th>
            <td><?= $this->Number->format($itemClas->cEb) ?></td>
        </tr>
        <tr>
            <th><?= __('S') ?></th>
            <td><?= $this->Number->format($itemClas->s) ?></td>
        </tr>
        <tr>
            <th><?= __('M3') ?></th>
            <td><?= $this->Number->format($itemClas->m3) ?></td>
        </tr>
        <tr>
            <th><?= __('SE') ?></th>
            <td><?= $this->Number->format($itemClas->sE) ?></td>
        </tr>
        <tr>
            <th><?= __('M4') ?></th>
            <td><?= $this->Number->format($itemClas->m4) ?></td>
        </tr>
        <tr>
            <th><?= __('SH') ?></th>
            <td><?= $this->Number->format($itemClas->sH) ?></td>
        </tr>
        <tr>
            <th><?= __('M5') ?></th>
            <td><?= $this->Number->format($itemClas->m5) ?></td>
        </tr>
    </table>
</div>
