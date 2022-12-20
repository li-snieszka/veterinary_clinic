<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Doctor> $doctors
 */
?>
<div class="doctors index content">
    <?= $this->Html->link(__('New Doctor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Doctors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_doctor') ?></th>
                    <th><?= $this->Paginator->sort('id_specialization') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('surname') ?></th>
                    <th><?= $this->Paginator->sort('identity_code') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doctors as $doctor): ?>
                <tr>
                    <td><?= $this->Number->format($doctor->id_doctor) ?></td>
                    <td><?= $this->Number->format($doctor->id_specialization) ?></td>
                    <td><?= h($doctor->name) ?></td>
                    <td><?= h($doctor->surname) ?></td>
                    <td><?= h($doctor->identity_code) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $doctor->id_doctor]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctor->id_doctor]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctor->id_doctor], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id_doctor)]) ?>
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
