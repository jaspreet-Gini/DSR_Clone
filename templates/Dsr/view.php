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
            <?= $this->Html->link(__('Edit Dsr'), ['action' => 'edit', $dsr->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dsr'), ['action' => 'delete', $dsr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dsr->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dsr'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dsr'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dsr view content">
            <h3><?= h($dsr->project_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project Name') ?></th>
                    <td><?= h($dsr->project_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($dsr->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dsr->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Task No') ?></th>
                    <td><?= $this->Number->format($dsr->task_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hour') ?></th>
                    <td><?= h($dsr->hour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($dsr->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Task Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($dsr->task_description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>