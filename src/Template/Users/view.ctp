<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->userID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->userID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userID)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->userID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('FirstName') ?></th>
            <td><?= h($user->firstName) ?></td>
        </tr>
        <tr>
            <th><?= __('LastName') ?></th>
            <td><?= h($user->lastName) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($user->userID) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($user->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Nbr') ?></th>
            <td><?= $this->Number->format($user->nbr) ?></td>
        </tr>
        <tr>
            <th><?= __('LocationID') ?></th>
            <td><?= $this->Number->format($user->locationID) ?></td>
        </tr>
        <tr>
            <th><?= __('LastLogin') ?></th>
            <td><?= h($user->lastLogin) ?></td>
        </tr>
        <tr>
            <th><?= __('PrevLastLogin') ?></th>
            <td><?= h($user->prevLastLogin) ?></td>
        </tr>
    </table>
</div>
