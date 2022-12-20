<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServicesType $servicesType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Services Type'), ['action' => 'edit', $servicesType->id_type], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Services Type'), ['action' => 'delete', $servicesType->id_type], ['confirm' => __('Are you sure you want to delete # {0}?', $servicesType->id_type), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Services Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicesType view content">
            <h3><?= h($servicesType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($servicesType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Type') ?></th>
                    <td><?= $this->Number->format($servicesType->id_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($servicesType->price) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
