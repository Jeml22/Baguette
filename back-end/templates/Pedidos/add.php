<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pedidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pedidos form content">
            <?= $this->Form->create($pedido) ?>
            <fieldset>
                <legend><?= __('Add Pedido') ?></legend>
                <?php
                    echo $this->Form->control('nom_producto');
                    echo $this->Form->control('cantidad');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('estado_producto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
