<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Item Class'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="itemClass form large-9 medium-8 columns content">
    <?= $this->Form->create($itemClas) ?>
    <fieldset>
        <legend><?= __('Add Item Clas') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('suggestedGateway');
            echo $this->Form->input('cPdb');
            echo $this->Form->input('a');
            echo $this->Form->input('aMax');
            echo $this->Form->input('d');
            echo $this->Form->input('aPrime');
            echo $this->Form->input('cCb');
            echo $this->Form->input('m1');
            echo $this->Form->input('pO');
            echo $this->Form->input('m2');
            echo $this->Form->input('cEb');
            echo $this->Form->input('s');
            echo $this->Form->input('m3');
            echo $this->Form->input('sE');
            echo $this->Form->input('m4');
            echo $this->Form->input('sH');
            echo $this->Form->input('m5');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
