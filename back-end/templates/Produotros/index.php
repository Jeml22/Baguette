<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Produotro> $produotros
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="produotros index content mb-5">
    <h3 class="text-center"><?= __('Tipo <br> Otros Productos') ?></h3>
    <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('id_producto', ['label' => 'Identificador']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('precio') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('cantidad_disponible') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('nombre_p', ('Nombre') . '<br>' .
                                                ('del Producto'), ['escape' => false]) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('tipo_prod', ('Tipo de') . '<br>' .
                                                ('Producto'), ['escape' => false]) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('peso') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('descripcion') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produotros as $produotro) : ?>
                    <tr>
                        <td class="actions text-center">
                            <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $produotro->id_producto]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $produotro->id_producto]) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $produotro->id_producto], ['confirm' => __('Are you sure you want to delete # {0}?', $produotro->id_producto)]) ?>
                        </td>
                        <td><?= $this->Number->format($produotro->id_producto) ?></td>
                        <td><?= $this->Number->format($produotro->precio) ?></td>
                        <td><?= $this->Number->format($produotro->cantidad_disponible) ?></td>
                        <td><?= h($produotro->nombre_p) ?></td>
                        <td><?= h($produotro->tipo_prod) ?></td>
                        <td><?= $this->Number->format($produotro->peso) ?></td>
                        <td><?= h($produotro->descripcion) ?></td>
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