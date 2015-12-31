<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->locationID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->locationID], ['confirm' => __('Are you sure you want to delete # {0}?', $location->locationID)]) ?> </li>
        <li><?= $this->Html->link(__('List Location'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="location view large-9 medium-8 columns content">
    <h3><?= h($location->locationID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($location->country) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($location->state) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($location->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Neighborhood') ?></th>
            <td><?= h($location->neighborhood) ?></td>
        </tr>
        <tr>
            <th><?= __('SignupKey') ?></th>
            <td><?= h($location->signupKey) ?></td>
        </tr>
        <tr>
            <th><?= __('LocationID') ?></th>
            <td><?= $this->Number->format($location->locationID) ?></td>
        </tr>
    </table>
</div>
