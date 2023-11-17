<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produpane $produpane
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <?= $this->Html->link(__('Editar Producto'), ['action' => 'edit', $produpane->id_producto], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="produpanes view content">
            <h3 class="text-center"><?= h($produpane->id_producto) ?></h3>
            <table>
                <tr>
                    <th class="text-center"><?= __('Identificador') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpane->id_producto) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Nombre del Producto') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($produpane->nombre_p) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Tipode de Producto') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($produpane->tipo_prod) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Descripcion') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($produpane->descripcion) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Precio') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpane->precio) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Cantidad Disponible') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpane->cantidad_disponible) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Peso Gramos') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($produpane->peso) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
