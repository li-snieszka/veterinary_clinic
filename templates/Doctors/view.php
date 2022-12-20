<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Doctor'), ['action' => 'edit', $doctor->id_doctor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Doctor'), ['action' => 'delete', $doctor->id_doctor], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id_doctor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doctors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Doctor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="doctors view content">
            <h3><?= h($doctor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($doctor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surname') ?></th>
                    <td><?= h($doctor->surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Identity Code') ?></th>
                    <td><?= h($doctor->identity_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Doctor') ?></th>
                    <td><?= $this->Number->format($doctor->id_doctor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Specialization') ?></th>
                    <td><?= $this->Number->format($doctor->id_specialization) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
