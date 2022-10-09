<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Car'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars view content">
            <h3><?= h($car->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Car Reg No') ?></th>
                    <td><?= h($car->car_reg_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Car Num Plate') ?></th>
                    <td><?= h($car->car_num_plate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Car Model') ?></th>
                    <td><?= h($car->car_model) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $car->has('user') ? $this->Html->link($car->user->name, ['controller' => 'Users', 'action' => 'view', $car->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Driver') ?></th>
                    <td><?= $car->has('driver') ? $this->Html->link($car->driver->id, ['controller' => 'Drivers', 'action' => 'view', $car->driver->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($car->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($car->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($car->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cardrivers') ?></h4>
                <?php if (!empty($car->cardrivers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Car Id') ?></th>
                            <th><?= __('Driver Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($car->cardrivers as $cardrivers) : ?>
                        <tr>
                            <td><?= h($cardrivers->id) ?></td>
                            <td><?= h($cardrivers->car_id) ?></td>
                            <td><?= h($cardrivers->driver_id) ?></td>
                            <td><?= h($cardrivers->created) ?></td>
                            <td><?= h($cardrivers->modified) ?></td>
                            <td><?= h($cardrivers->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cardrivers', 'action' => 'view', $cardrivers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cardrivers', 'action' => 'edit', $cardrivers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cardrivers', 'action' => 'delete', $cardrivers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardrivers->id)]) ?>
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
