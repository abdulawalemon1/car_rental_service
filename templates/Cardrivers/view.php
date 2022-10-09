<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardriver $cardriver
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cardriver'), ['action' => 'edit', $cardriver->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cardriver'), ['action' => 'delete', $cardriver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardriver->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cardrivers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cardriver'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cardrivers view content">
            <h3><?= h($cardriver->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Car') ?></th>
                    <td><?= $cardriver->has('car') ? $this->Html->link($cardriver->car->car_num_plate, ['controller' => 'Cars', 'action' => 'view', $cardriver->car->car_num_plate]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Driver') ?></th>
                    <td><?= $cardriver->has('driver') ? $this->Html->link($cardriver->driver->driver_name, ['controller' => 'Drivers', 'action' => 'view', $cardriver->driver->driver_name]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cardriver->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cardriver->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($cardriver->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $cardriver->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
