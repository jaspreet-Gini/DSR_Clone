<h1>Register</h1>

<?php
    // Display flash messages
    echo $this->Flash->render();

    echo $this->Form->create($user);
?>

<div>
    <?= $this->Form->control('name', ['label' => 'Name', 'required' => true]) ?>
</div>

<div>
    <?= $this->Form->control('email', ['label' => 'Email', 'type' => 'email', 'required' => true]) ?>
</div>

<div>
    <?= $this->Form->control('password', ['label' => 'Password', 'type' => 'password', 'required' => true]) ?>
</div>

<div>
    <?= $this->Form->button('Register') ?>
</div>

<?= $this->Form->end() ?>
