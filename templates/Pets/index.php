<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pet> $pets
 */
?>
<div class="pets index content">
    <?= $this->Html->link(__('New Pet'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_pet') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('id_client') ?></th>
                    <th><?= $this->Paginator->sort('id_genre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pets as $pet): ?>
                <tr>
                    <td><?= $this->Number->format($pet->id_pet) ?></td>
                    <td><?= h($pet->name) ?></td>
                    <td><?= $this->Number->format($pet->weight) ?></td>
                    <td><?= $this->Number->format($pet->age) ?></td>
                    <td><?= $this->Number->format($pet->id_client) ?></td>
                    <td><?= $this->Number->format($pet->id_genre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pet->id_pet]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pet->id_pet]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pet->id_pet], ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id_pet)]) ?>
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
