<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ServicesType> $servicesType
 */
?>
<div class="servicesType index content">
    <?= $this->Html->link(__('New Services Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Services Type') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_type') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicesType as $servicesType): ?>
                <tr>
                    <td><?= $this->Number->format($servicesType->id_type) ?></td>
                    <td><?= h($servicesType->name) ?></td>
                    <td><?= $this->Number->format($servicesType->price) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $servicesType->id_type]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicesType->id_type]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicesType->id_type], ['confirm' => __('Are you sure you want to delete # {0}?', $servicesType->id_type)]) ?>
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
