<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Pedido'), ['action' => 'edit', $pedido->id_pedido], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Pedido'), ['action' => 'delete', $pedido->id_pedido], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $pedido->id_pedido), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Pedidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="pedidos form content col-6 text-center">
            <h3><?= h($pedido->id_pedido) ?></h3>
            <table>
                <tr>
                    <th class="text-center"><?= __('Identificador del Pedido') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($pedido->id_pedido) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Nombre del Producto') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($pedido->nom_producto) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Estado') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($pedido->estado) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Estado Producto') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($pedido->estado_producto) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Cantidad') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($pedido->cantidad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
