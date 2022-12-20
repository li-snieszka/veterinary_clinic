<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Service> $services
 */
?>
<div class="services index content">
    <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Services') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_service') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('id_doctor') ?></th>
                    <th><?= $this->Paginator->sort('id_type') ?></th>
                    <th><?= $this->Paginator->sort('id_pet') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $service): ?>
                <tr>
                    <td><?= $this->Number->format($service->id_service) ?></td>
                    <td><?= h($service->date) ?></td>
                    <td><?= $this->Number->format($service->id_doctor) ?></td>
                    <td><?= $this->Number->format($service->id_type) ?></td>
                    <td><?= $this->Number->format($service->id_pet) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $service->id_service]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id_service]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id_service], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id_service)]) ?>
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
