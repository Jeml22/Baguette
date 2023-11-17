<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedore $proveedore
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center mb-5">
            <?= $this->Html->link(__('Editar Proveedor'), ['action' => 'edit', $proveedore->id_proveedor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Proveedor'), ['action' => 'delete', $proveedore->id_proveedor], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $proveedore->nombre), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Agregar Proveedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="proveedores form content col-6 text-center">
            <h3><?= h($proveedore->id_proveedor) ?></h3>
            <table>
                <tr>
                    <th class="text-center"><?= __('Identificador') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($proveedore->id_proveedor) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Nombre') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($proveedore->nombre) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Producto que Provee') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($proveedore->Producto_proveedor) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Numero De Contacto') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($proveedore->numero_de_contacto) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
