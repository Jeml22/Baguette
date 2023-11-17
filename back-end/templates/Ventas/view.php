<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venta $venta
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center mb-5">
            <?= $this->Form->postLink(__('Eliminar Venta'), ['action' => 'delete', $venta->id_venta], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $venta->id_venta), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Ventas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="ventas form content col-6 text-center">
            <h3><?= h($venta->id_venta) ?></h3>
            <table>
                <tr>
                    <th class="text-center"><?= __('Identificador') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($venta->id_venta) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Productos Encargados') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($venta->productos) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Identificador de <br> la factura') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($venta->idfactura) ?></td>
                </tr>
                <tr>
                <tr>
                    <th class="text-center"><?= __('Cantidad Total <br> de Productos') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($venta->cantidad) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Valor Total') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($venta->total) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Fecha creación <br> de factura') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($venta->fecha) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Hora creación <br> de factura') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($venta->hora) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
