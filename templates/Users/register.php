<br>
<div class="users form content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please Register') ?></legend>
        <?= $this->Form->control('name') ?>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('address') ?>
        <?= $this->Form->control('country') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('confirmpassword') ?>
    </fieldset>
    <?= $this->Form->button(__('Register')); ?>
    <?= $this->Form->end() ?>
</div>