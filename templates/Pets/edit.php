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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pet->id_pet],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id_pet), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pets form content">
            <?= $this->Form->create($pet) ?>
            <fieldset>
                <legend><?= __('Edit Pet') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('age');
                    echo $this->Form->control('id_client');
                    echo $this->Form->control('id_genre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
