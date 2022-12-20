<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialization $specialization
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Specialization'), ['action' => 'edit', $specialization->id_specialization], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Specialization'), ['action' => 'delete', $specialization->id_specialization], ['confirm' => __('Are you sure you want to delete # {0}?', $specialization->id_specialization), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Specializations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Specialization'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="specializations view content">
            <h3><?= h($specialization->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($specialization->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Specialization') ?></th>
                    <td><?= $this->Number->format($specialization->id_specialization) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
