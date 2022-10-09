<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Driver'), ['action' => 'edit', $driver->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Driver'), ['action' => 'delete', $driver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Drivers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Driver'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="drivers view content">
            <h3><?= h($driver->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Driver Name') ?></th>
                    <td><?= h($driver->driver_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Licence No') ?></th>
                    <td><?= h($driver->licence_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($driver->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $driver->has('user') ? $this->Html->link($driver->user->name, ['controller' => 'Users', 'action' => 'view', $driver->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($driver->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($driver->age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($driver->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($driver->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Car Drivers') ?></h4>
                <?php if (!empty($driver->car_drivers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Car Id') ?></th>
                            <th><?= __('Driver Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($driver->car_drivers as $carDrivers) : ?>
                        <tr>
                            <td><?= h($carDrivers->id) ?></td>
                            <td><?= h($carDrivers->car_id) ?></td>
                            <td><?= h($carDrivers->driver_id) ?></td>
                            <td><?= h($carDrivers->created) ?></td>
                            <td><?= h($carDrivers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CarDrivers', 'action' => 'view', $carDrivers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CarDrivers', 'action' => 'edit', $carDrivers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CarDrivers', 'action' => 'delete', $carDrivers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carDrivers->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
