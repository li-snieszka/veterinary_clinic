<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Genre> $genres
 */
?>
<div class="genres index content">
    <?= $this->Html->link(__('New Genre'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Genres') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_genre') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($genres as $genre): ?>
                <tr>
                    <td><?= $this->Number->format($genre->id_genre) ?></td>
                    <td><?= h($genre->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $genre->id_genre]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $genre->id_genre]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $genre->id_genre], ['confirm' => __('Are you sure you want to delete # {0}?', $genre->id_genre)]) ?>
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
