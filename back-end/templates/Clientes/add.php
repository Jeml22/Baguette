<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav">
            <?= $this->Html->link(__('Lista Clientes'), ['action' => 'index'], ['class' => 'side-nav-item mb-5 text-center']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center ">
        <div class="productos form content col-6 text-center">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Añadir Cliente') ?></legend>
                <?php
                    echo $this->Form->control('tdoc',['label'=> 'Tipo de documento' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('ndocu',['label'=> 'Numero de documento' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('nombre',['label'=> 'Nombre' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('fnaci',['label'=> 'Fecha de nacimiento' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('correo',['label'=> 'Correo Electrónico' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('direccion',['label'=> 'Dirección' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('numcont',['label'=> 'Numero de contacto' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('contra',['label'=> 'Contraseña' ,'class' => 'col-9 text-center']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

