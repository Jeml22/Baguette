<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produpane $produpane
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav">
            <?= $this->Html->link(__('Lista de Productos'), ['action' => 'index'], ['class' => 'side-nav-item text-center']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center ">
        <div class="produpanes fform content col-6 text-center">
            <?= $this->Form->create($produpane) ?>
            <fieldset>
                <legend><?= __('Añadir Nuevo Producto') ?></legend>
                <?php
                    echo $this->Form->control('precio',['label'=> 'Precio' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('cantidad_disponible',['label'=> 'Cantidad Disponible' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('nombre_p',['label'=> 'Nombre del Producto' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('tipo_prod',['label'=> 'Tipo del Producto' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('peso',['label'=> 'Peso Gramos' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('descripcion',['label'=> 'Descripción' ,'class' => 'col-9 text-center']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
