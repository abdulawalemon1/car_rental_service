<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Driver> $drivers
 */
?>
<div class="drivers index content">
    <?= $this->Html->link(__('New Driver'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Drivers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('driver_name') ?></th>
                    <th><?= $this->Paginator->sort('licence_no') ?></th>
                    <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($drivers as $driver): ?>
                <tr>
                    <td><?= $this->Number->format($driver->id) ?></td>
                    <td><?= h($driver->driver_name) ?></td>
                    <td><?= h($driver->licence_no) ?></td>
                    <td><?= $this->Number->format($driver->age) ?></td>
                    <td><?= h($driver->photo) ?></td>
                    <td><?= $driver->has('user') ? $this->Html->link($driver->user->name, ['controller' => 'Users', 'action' => 'view', $driver->user->id]) : '' ?></td>
                    <td><?= h($driver->created) ?></td>
                    <td><?= h($driver->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $driver->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $driver->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $driver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id)]) ?>
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
