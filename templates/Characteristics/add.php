<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Characteristic $characteristic
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Characteristics'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="characteristics form content">
            <?= $this->Form->create($characteristic) ?>
            <fieldset>
                <legend><?= __('Add Characteristic') ?></legend>
                <?php
                    echo $this->Form->control('characteristic');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
