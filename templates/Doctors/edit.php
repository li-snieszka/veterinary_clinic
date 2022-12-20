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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctor->id_doctor],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id_doctor), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Doctors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="doctors form content">
            <?= $this->Form->create($doctor) ?>
            <fieldset>
                <legend><?= __('Edit Doctor') ?></legend>
                <?php
                    echo $this->Form->control('id_specialization');
                    echo $this->Form->control('name');
                    echo $this->Form->control('surname');
                    echo $this->Form->control('identity_code');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
