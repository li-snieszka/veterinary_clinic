<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id_service], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id_service], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id_service), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="services view content">
            <h3><?= h($service->id_service) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Service') ?></th>
                    <td><?= $this->Number->format($service->id_service) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Doctor') ?></th>
                    <td><?= $this->Number->format($service->id_doctor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Type') ?></th>
                    <td><?= $this->Number->format($service->id_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pet') ?></th>
                    <td><?= $this->Number->format($service->id_pet) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($service->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
