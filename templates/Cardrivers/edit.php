<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardriver $cardriver
 * @var string[]|\Cake\Collection\CollectionInterface $cars
 * @var string[]|\Cake\Collection\CollectionInterface $drivers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cardriver->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cardriver->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cardrivers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cardrivers form content">
            <?= $this->Form->create($cardriver) ?>
            <fieldset>
                <legend><?= __('Edit Cardriver') ?></legend>
                <?php
                    echo $this->Form->control('car_id', ['options' => $cars]);
                    echo $this->Form->control('driver_id', ['options' => $drivers]);
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
