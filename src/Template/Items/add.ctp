<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item, [
      'class' => 'form-horizontal'
    ]) ?>
    <fieldset>
        <legend><?= __('Add Item') ?></legend>
        <?php
            echo $this->Form->control('category_id');
            echo $this->Form->control('user_id');
            echo $this->Form->control('name');
            echo $this->Form->control('image');
            echo $this->Form->control('price');
            echo $this->Form->control('description');
            echo $this->Form->control('stars');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
