<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cardriver> $cardrivers
 */
?>
<div class="cardrivers index content">
    <?= $this->Html->link(__('Assign Driver'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cardrivers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('car_id') ?> Number Plate No</th>
                    <th><?= $this->Paginator->sort('driver_id') ?> Name</th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $cardrivers as $cardriver): ?>
                <tr>
                    <td><?= $this->Number->format($cardriver->id) ?></td>
                    <td><?= $cardriver->has('car') ? $this->Html->link($cardriver->car->car_num_plate, ['controller' => 'Cars', 'action' => 'view', $cardriver->car->id]) : '' ?></td>
                    <td><?= $cardriver->has('driver') ? $this->Html->link($cardriver->driver->driver_name, ['controller' => 'Drivers', 'action' => 'view', $cardriver->driver->id]) : '' ?></td>
                    <td><?= h($cardriver->created) ?></td>
                    <td><?= h($cardriver->modified) ?></td>
                    <?php if($cardriver->status ==1):?>
                        <td>Assigned</td>
                    <?php else:?>
                        <td>Unassigned</td>
                    <?php endif?>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cardriver->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cardriver->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cardriver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardriver->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
