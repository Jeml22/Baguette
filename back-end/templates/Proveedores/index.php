<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Proveedore> $proveedores
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="proveedor index content mb-5">
        <h3 class="text-center"><?= __('Proveedores') ?></h3>
        <?= $this->Html->link(__('Nuevo Proveedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th class="actions text-center"><?= __('Actions') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('id_proveedor', ['label' => 'Identificador']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('nombre', ['label' => 'Nombre']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('Producto_proveedor', ('Prducto que') . '<br>' . ('Provee'), ['escape' => false]) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('numero_de_contacto', ('Numero de') . '<br>' . ('Contacto'), ['escape' => false]) ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proveedores as $proveedore) : ?>
                        <tr>
                            <td class="actions text-center">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $proveedore->id_proveedor]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $proveedore->id_proveedor]) ?>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $proveedore->id_proveedor], ['confirm' => __('Estas seguro de eliminar al cliente {0}?', $proveedore->id_proveedor)]) ?>
                            </td>
                            <td class="text-center"><?= $this->Number->format($proveedore->id_proveedor) ?></td>
                            <td class="text-center"><?= h($proveedore->nombre) ?></td>
                            <td class="text-center"><?= h($proveedore->Producto_proveedor) ?></td>
                            <td class="text-center"><?= h($proveedore->numero_de_contacto) ?></td>
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