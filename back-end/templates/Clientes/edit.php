<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */

?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <?= $this->Html->link(__('Volver a') . '<br>lista de Clientes', ['action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?>
            <?= $this->Html->Link( __('Eliminar'),['action' => 'delete', $cliente->id], 
            ['confirm' => __('Estas seguro de eliminar el cliente con el numero{0}?', $cliente->ndocu),
            ['class' => 'side-nav-item']]
            ) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="productos form content col-6 text-center mt-5">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Editar Clientes') ?></legend>
                <?php
                    echo $this->Form->control('tdoc',['label'=> 'Tipo de documento' , 'class' => 'col-9 text-center']);
                    echo $this->Form->control('ndocu',['label'=> 'Numero de documento' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('nombre',['label'=> 'Nombre' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('fnaci',['label'=> 'Fecha de nacimiento' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('correo',['label'=> 'Correo Electrónico' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('direccion',['label'=> 'Dirección' ,'class' => 'col-9 text-center']);
                    echo $this->Form->control('numcont',['label'=> 'Numero de contacto' ,'class' => 'col-9 text-center']);
                    
                    echo $this->Form->label('role_id', 'Rol');
                    echo $this->Form->select('role_id', $roles, ['class' => 'col-9']);

                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
