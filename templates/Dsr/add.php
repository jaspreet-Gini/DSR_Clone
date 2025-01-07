<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dsr $dsr
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dsr'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dsr form content">
            <?= $this->Form->create($dsr) ?>
            <fieldset>
                <legend><?= __('Add Daily Status Report') ?></legend>
                <?php
                    echo $this->Form->control('project_name');
                    echo $this->Form->control('task_no');
                    echo $this->Form->control('task_description');
                    echo $this->Form->control('hour');
                    echo $this->Form->control('status');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
