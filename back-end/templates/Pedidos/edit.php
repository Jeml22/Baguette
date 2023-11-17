<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <?= $this->Html->link(__('Volver a') . '<br>lista de Pedidos', ['action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $pedido->id_pedido], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $pedido->nom_producto), 'class' => 'side-nav-item']) ?>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="pedidos form content col-6 text-center mt-5">
            <?= $this->Form->create($pedido) ?>
            <fieldset>
                <legend><?= __('Edit Pedido') ?></legend>
                <?php
                    echo $this->Form->control('nom_producto',['label'=> 'Nombre del producto' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('cantidad',['label'=> 'Cantidad del producto' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('estado',['label'=> 'Estado de Entrega' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('estado_producto',['label'=> 'Estado del Producto' , 'class' => 'col-9 text-center']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
