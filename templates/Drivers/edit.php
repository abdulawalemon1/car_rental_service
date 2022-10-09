<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $driver->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Drivers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="drivers form content">
            <?= $this->Form->create($driver) ?>
            <fieldset>
                <legend><?= __('Edit Driver') ?></legend>
                <?php
                    echo $this->Form->control('driver_name');
                    echo $this->Form->control('licence_no');
                    echo $this->Form->control('age');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
