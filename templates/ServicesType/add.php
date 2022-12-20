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
            <?= $this->Html->link(__('List Services Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="servicesType form content">
            <?= $this->Form->create($servicesType) ?>
            <fieldset>
                <legend><?= __('Add Services Type') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
