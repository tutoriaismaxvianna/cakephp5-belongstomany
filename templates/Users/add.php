<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $characteristics
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    debug($characteristics->count());
                    if ($characteristics->count() > 0) {
                        echo $this->Form->control('characteristics._ids', [
                            'options' => $characteristics,
                            'type' => 'select',
                            'multiple' => 'checkbox',
                            'label' => 'Assuntos'
                            ]);
                    }  else {
                ?>
                    <label for="">Assuntos</label> 
                    <p>Sem opões cadastradas</p>  
                <?php } ?>                  
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
