<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $clientes
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="clientes index content mb-5">
        <h3 class="text-center"><?= __('Clientes') ?></h3>
                <?= $this->Html->link(__('Cliente Nuevo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th class="actions text-center"><?= __('Acciones') ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('id', ['label' => 'Identificador']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('tdoc', ['label' => 'Tipo de documento']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('ndocu', ['label' => 'Numero de documento']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('nombre', ['label' => 'Nombre']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('fnaci', ['label' => 'Fecha de nacimiento']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('correo', ['label' => 'Correo electrónico']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('direccion', ['label' => 'Dirección']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('numcont', ['label' => 'Teléfono']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('contra', ['label' => 'Contraseña']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('role_id', ['label' => 'Roles']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('regisFecha', ['label' => 'Fecha de registro']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('regisHora', ['label' => 'Hora de registro']) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('fechaContra', ('Fecha') . '<br>' . ('cambio') . '<br>' .
                                                    ('contraseña'), ['escape' => false]) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('horaContra', ('Hora') . '<br>' . ('cambio') . '<br>' .
                                                    ('contraseña'), ['escape' => false]) ?></th>
                        <th class="text-center"><?= $this->Paginator->sort('Banco', ('Nombre') . '<br>' . ('cuenta bancaria'), ['escape' => false]) ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente) : ?>
                        <tr>
                            <td class="actions text-center">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cliente->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Estas seguro de eliminar al cliente {0}?', $cliente->nombre)]) ?>
                            </td>
                            <td class="text-center"><?= $this->Number->format($cliente->id) ?></td>
                            <td class="text-center"><?= h($cliente->tdoc) ?></td>
                            <td class="text-center"><?= $this->Number->format($cliente->ndocu) ?></td>
                            <td class="text-center"><?= h($cliente->nombre) ?></td>
                            <td class="text-center"><?= h($cliente->fnaci) ?></td>
                            <td class="text-center"><?= h($cliente->correo) ?></td>
                            <td class="text-center"><?= h($cliente->direccion) ?></td>
                            <td class="text-center"><?= h($cliente->numcont) ?></td>
                            <td class="text-center"><?= h($cliente->contra) ?></td>
                            <td class="text-center">
                                <?php
                                // Arreglo que mapea valores numéricos a nombres de roles
                                $rolesMapping = [
                                    1 => 'Cliente',
                                    2 => 'Administrador',
                                    3 => 'Supervisor'
                                ];

                                // Obtener el nombre del rol usando el arreglo de mapeo
                                $roleName = isset($rolesMapping[$cliente->role_id]) ? $rolesMapping[$cliente->role_id] : '';

                                // Mostrar el nombre del rol
                                echo h($roleName);
                                ?>
                            </td>
                            <td class="text-center"><?= h($cliente->regisFecha) ?></td>
                            <td class="text-center"><?= h($cliente->regisHora) ?></td>
                            <td class="text-center"><?= h($cliente->fechaContra) ?></td>
                            <td class="text-center"><?= h($cliente->horaContra) ?></td>
                            <td class="text-center"><?= $this->Number->format($cliente->Banco) ?></td>
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