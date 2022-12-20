<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre $genre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Genre'), ['action' => 'edit', $genre->id_genre], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Genre'), ['action' => 'delete', $genre->id_genre], ['confirm' => __('Are you sure you want to delete # {0}?', $genre->id_genre), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Genres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Genre'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="genres view content">
            <h3><?= h($genre->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($genre->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Genre') ?></th>
                    <td><?= $this->Number->format($genre->id_genre) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
