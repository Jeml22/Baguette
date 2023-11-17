<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedore $proveedore
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav">
            <?= $this->Html->link(__('Lista de Proveedores'), ['action' => 'index'], ['class' => 'side-nav-item text-center']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center ">
        <div class="proveedores form content col-6 text-center">
            <?= $this->Form->create($proveedore) ?>
            <fieldset>
                <legend><?= __('Añadir Proveedore') ?></legend>
                <?php
                    echo $this->Form->control('nombre',['label'=> 'Nombre' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('Producto_proveedor',['label'=> 'Producto que provee' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('numero_de_contacto',['label'=> 'Numero de contacto' , 'class' => 'col-9 text-center']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
