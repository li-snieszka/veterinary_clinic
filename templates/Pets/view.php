<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pet'), ['action' => 'edit', $pet->id_pet], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pet'), ['action' => 'delete', $pet->id_pet], ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id_pet), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pets view content">
            <h3><?= h($pet->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pet->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pet') ?></th>
                    <td><?= $this->Number->format($pet->id_pet) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= $this->Number->format($pet->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($pet->age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Client') ?></th>
                    <td><?= $this->Number->format($pet->id_client) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Genre') ?></th>
                    <td><?= $this->Number->format($pet->id_genre) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
