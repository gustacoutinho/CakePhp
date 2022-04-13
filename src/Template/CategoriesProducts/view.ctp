<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Categories Product']), ['action' => 'edit', $categoriesProduct->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Categories Product']), ['action' => 'delete', $categoriesProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesProduct->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Categories Products']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Categories Product']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Categories']), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Category']), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Products']), ['controller' => 'Products', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Product']), ['controller' => 'Products', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="categoriesProducts col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($categoriesProduct->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Category</th>
                        <td><?= $categoriesProduct->has('category') ? $this->Html->link($categoriesProduct->category->title, ['controller' => 'Categories', 'action' => 'view', $categoriesProduct->category->id]) : '' ?></td>
                    </tr>
                                                        <tr>
                        <th>Product</th>
                        <td><?= $categoriesProduct->has('product') ? $this->Html->link($categoriesProduct->product->title, ['controller' => 'Products', 'action' => 'view', $categoriesProduct->product->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($categoriesProduct->id) ?></td>
                    </tr>
                                                                </table>
                                </div>
    </div>
</div>
