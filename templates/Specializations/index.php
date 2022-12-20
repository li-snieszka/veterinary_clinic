<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Specialization> $specializations
 */
?>
<div class="specializations index content">
    <?= $this->Html->link(__('New Specialization'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Specializations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_specialization') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specializations as $specialization): ?>
                <tr>
                    <td><?= $this->Number->format($specialization->id_specialization) ?></td>
                    <td><?= h($specialization->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $specialization->id_specialization]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $specialization->id_specialization]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $specialization->id_specialization], ['confirm' => __('Are you sure you want to delete # {0}?', $specialization->id_specialization)]) ?>
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
