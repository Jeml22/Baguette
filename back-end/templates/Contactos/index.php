<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contacto> $contactos
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="contactos index content">
    <h3 class="text-center"><?= __('Contactos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th class="actions text-center"><?= __('Acciones') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('idcontacto', ['label' => 'Identificador']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('correo', ['label' => 'Correo Electrónico']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('mensaje') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactos as $contacto): ?>
                <tr>
                    <td class="actions text-center">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $contacto->idcontacto]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $contacto->idcontacto], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $contacto->idcontacto)]) ?>
                    </td>
                    <td class="text-center"><?= $this->Number->format($contacto->idcontacto) ?></td>
                    <td class="text-center"><?= h($contacto->correo) ?></td>
                    <td class="text-center"><?= h($contacto->mensaje) ?></td>
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
</body>
</html>