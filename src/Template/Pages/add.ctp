<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar Páginas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <fieldset>
        <legend><?= __('Adicionar Página') ?></legend>
        <?php
            echo $this->Form->create($page);
            echo $this->Form->input('title', ['label' => 'Título']);
            echo $this->Form->input('url');
            echo $this->Form->input('body');
            echo $this->Form->button('Salvar');
            echo $this->Form->end();
        ?>
    </fieldset>
</div>
