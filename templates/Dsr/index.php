<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dsr> $dsr
 */
?>
<div class="dsr index content">
    <?= $this->Html->link(__('New Dsr'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Submit'), ['action' => 'sendEmails'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Logout'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
    <h3><?= __('Your Todays Worked Items') ?></h3>
    <p><?= __('Send Your Report To')?></p>
    <div style="display: flex; flex-direction: column;">
        <div style="display: flex; flex-direction: row; align-items: center;">
            <input type="checkbox" id="sendReportNand" name="sendReport[]" value="nand_maithani">
            <label for="sendReportNand" style="margin-left: 5px;"><?= __('Nand Maithani')?></label>

            <input type="checkbox" id="sendReportNoah" name="sendReport[]" value="noah_skocilich" style="margin-left: 20px;">
            <label for="sendReportNoah" style="margin-left: 5px;"><?= __('Noah Skocilich')?></label>

            <input type="checkbox" id="sendReportPraylanker" name="sendReport[]" value="praylanker_kumar" style="margin-left: 20px;">
            <label for="sendReportPraylanker" style="margin-left: 5px;"><?= __('Praylanker Kumar')?></label>
        </div>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('project_name') ?></th>
                    <th><?= $this->Paginator->sort('task_no') ?></th>
                    <th><?= $this->Paginator->sort('hour') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dsr as $dsr): ?>
                <tr>
                    <td><?= $this->Number->format($dsr->id) ?></td>
                    <td><?= h($dsr->project_name) ?></td>
                    <td><?= $this->Number->format($dsr->task_no) ?></td>
                    <td><?= h($dsr->hour) ?></td>
                    <td><?= h($dsr->status) ?></td>
                    <td><?= h($dsr->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dsr->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dsr->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dsr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dsr->id)]) ?>
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
