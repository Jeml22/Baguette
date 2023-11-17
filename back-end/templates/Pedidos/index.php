<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pedido> $pedidos
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<div class="pedidos index content mb-5">
    <h3 class="text-center"><?= __('Pedidos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="actions text-center"><?= __('Acciones') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('id_pedido', ['label' => 'Identificador del Pedido']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('nom_producto', ['label' => 'Nombre del producto']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('cantidad', ['label' => 'Cantidad del producto']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('estado', ['label' => 'Estado de Entrega']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('estado_producto', ['label' => 'Estado de Producto']) ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pedidos as $pedido): ?>
                <tr>
                    <td class="actions text-center">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $pedido->id_pedido]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pedido->id_pedido]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $pedido->id_pedido], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $pedido->id_pedido)]) ?>
                    </td>
                    <td class="text-center"><?= $this->Number->format($pedido->id_pedido) ?></td>
                    <td class="text-center"><?= h($pedido->nom_producto) ?></td>
                    <td class="text-center"><?= $this->Number->format($pedido->cantidad) ?></td>
                    <td class="text-center"><?= h($pedido->estado) ?></td>
                    <td class="text-center"><?= h($pedido->estado_producto) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Primero')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} registro(s) total(es)')) ?></p>
        </div>
</div>
</body>
</html>