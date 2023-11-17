<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contacto $contacto
 */
?>
<div class="row mb-5">
    <aside class="container">
        <div class="side-nav text-center">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Lista de Contactos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar Contacto'), ['action' => 'delete', $contacto->idcontacto], ['confirm' => __('¿Estás seguro de que quieres eliminarlo {0}?', $contacto->correo), 'class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive d-flex justify-content-center align-items-center">
        <div class="contactos form content col-6">
            <h3 class="text-center"><?= h($contacto->idcontacto) ?></h3>
            <table>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="text">
                        <strong><?= __('Nombre') ?></strong>
                        <blockquote>
                            <?= $this->Text->autoParagraph(h($contacto->nombre)); ?>
                        </blockquote>
                    </div>
                    <div class="text ml-5">
                        <strong><?= __('Apellido') ?></strong>
                        <blockquote>
                            <?= $this->Text->autoParagraph(h($contacto->apellido)); ?>
                        </blockquote>
                    </div>
                </div>
                <tr>
                    <th class="text-center"><?= __('Identificador') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= $this->Number->format($contacto->idcontacto) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Correo') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($contacto->correo) ?></td>
                </tr>
                <tr>
                    <th class="text-center"><?= __('Mensaje') ?></th>
                </tr>
                <tr>
                    <td class="text-center"><?= h($contacto->mensaje) ?></td>
                </tr>
                <tr>
            </table>
        </div>
    </div>
</div>