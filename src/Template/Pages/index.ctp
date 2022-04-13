<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li> <!-- __('exemplo') é como php echo -->
        <li><?= $this->Html->link(__('Nova Página'), ['action' => 'add']) ?></li> 
        <!-- sempre que omitido uma action por exemplo, o link será levado a action atual da pagina -->
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3>Páginas</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Body') ?></th>
                <th scope="col" class="actions"><?= __('Opções') ?></th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= $this->Number->format($page->id) ?></td>
                <td><?= h($page->title) ?></td>
                <td><?= h($page->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $page->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $page->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
