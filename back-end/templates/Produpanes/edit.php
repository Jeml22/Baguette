<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produpane $produpane
 */
?>
<div class="row mb-5">
    <aside class="container text-center">
        <div class="side-nav">
        <?= $this->Html->link(__('Volver a') . '<br>lista de productos', ['action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="produpanes form content col-6 text-center mt-5">
            <?= $this->Form->create($produpane) ?>
            <fieldset>
                <legend><?= __('Editar Producto') ?></legend>
                <?php
                    echo $this->Form->control('precio');
                    echo $this->Form->control('cantidad_disponible');
                    echo $this->Form->control('nombre_p', ['label' => 'Nombre del producto']);
                    echo $this->Form->control('tipo_prod', ['label' => 'Tipo del producto']);
                    echo $this->Form->control('peso', ['label' => 'Peso Gramos']);
                    echo $this->Form->control('descripcion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
