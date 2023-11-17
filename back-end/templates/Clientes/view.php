<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $cliente->ndocu), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Cliente nuevo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="productos form content col-6 text-center">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th class="text-center"><?= __('Identificador') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($cliente->id) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Tipo de <br> documento') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->tdoc) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Numero de <br> documento') ?></th>
                </tr>
                <tr>
                <td class="text-center"><?= $this->Number->format($cliente->ndocu) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Nombre') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->nombre) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Fecha de <br> nacimiento') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->fnaci) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Correo <br> electrónico') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->correo) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Dirección') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->direccion) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Teléfono') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->numcont) ?></td></tr>
                <tr>
                    <th class="text-center"><?= __('Contraseña') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->contra) ?></td>
                </tr>
                <tr>
                <?php
                // Arreglo que mapea valores numéricos a nombres de roles
                $rolesMapping = [
                    1 => 'Cliente',
                    2 => 'Administrador',
                    3 => 'Supervisor'
                ];

                // Obtener el nombre del rol usando el arreglo de mapeo
                $roleName = isset($rolesMapping[$cliente->role_id]) ? $rolesMapping[$cliente->role_id] : '';

                // Mostrar en la tabla
                ?>
                <tr>
                    <th class="text-center"><?= __('Roles') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($roleName) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Nombre de <br> banco') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($cliente->Banco) ?></td>
                </tr>
                <tr>
                <tr>
                    <th class="text-center"><?= __('Fecha de <br> registro') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->regisFecha) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Hora de <br> registro') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->regisHora) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Fecha cambio <br> de contraseña') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->fechaContra) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Hora cambio <br> de contraseña') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($cliente->horaContra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>