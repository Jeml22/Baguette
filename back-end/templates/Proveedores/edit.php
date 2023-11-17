<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedore $proveedore
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <?= $this->Form->postLink(__('Eliminar'),['action' => 'delete', $proveedore->id_proveedor],
                ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $proveedore->nombre), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="proveedores form content col-6 text-center mt-5">
            <?= $this->Form->create($proveedore) ?>
            <fieldset>
                <legend><?= __('Editar Proveedor') ?></legend>
                <?php
                    echo $this->Form->control('nombre',['label'=> 'Nombre' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('Producto_proveedor',['label'=> 'TProducto que Provee' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('numero_de_contacto',['label'=> 'Numero de Contacto' , 'class' => 'col-9 text-center']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
