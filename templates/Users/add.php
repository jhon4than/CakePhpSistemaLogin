<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>
<div class="row">
    <aside class="column">
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Adicionar Usuário') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('confirmar_password', ['type' => 'password']);
                    echo $this->Form->control('roles_id', ['options' => $roles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Criar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
