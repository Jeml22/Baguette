<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Venta> $ventas
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="ventas index content mb-5">
        <h3 class="text-center"><?= __('Ventas') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th class="actions text-center"><?= __('Acciones') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('id_venta', ['label' => 'Identificador']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('productos', ['label' => 'Productos Encargados']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('idfactura', ('Identificador de') . '<br>' . ('la Factura'), ['escape' => false]) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('cantidad', ('Cantidad Total') . '<br>' . ('de Productos'), ['escape' => false]) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('total', ['label' => 'Valor Total']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('fecha', ('Fecha Creacion') . '<br>' . ('de Factura'), ['escape' => false]) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('hora', ('Hora Creacion') . '<br>' . ('de Factura'), ['escape' => false]) ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventas as $venta) : ?>
                        <tr>
                            <td class="actions text-center">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $venta->id_venta]) ?>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $venta->id_venta], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $venta->id_venta)]) ?>
                            </td>
                            <td class="text-center"><?= $this->Number->format($venta->id_venta) ?></td>
                            <td class="text-center"><?= h($venta->productos) ?></td>
                            <td class="text-center"><?= h($venta->idfactura) ?></td>
                            <td class="text-center"><?= $this->Number->format($venta->cantidad) ?></td>
                            <td class="text-center"><?= $this->Number->format($venta->total) ?></td>
                            <td class="text-center"><?= h($venta->fecha) ?></td>
                            <td class="text-center"><?= h($venta->hora) ?></td>
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