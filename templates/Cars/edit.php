<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $drivers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $car->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $car->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars form content">
            <?= $this->Form->create($car) ?>
            <fieldset>
                <legend><?= __('Edit Car') ?></legend>
                <?php
                    echo $this->Form->control('car_reg_no');
                    echo $this->Form->control('car_num_plate');
                    echo $this->Form->control('car_model');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('driver_id', ['options' => $drivers, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
