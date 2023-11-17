<?php
// src/Model/Table/RolesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class RolesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('roles'); // Nombre de la tabla en la base de datos
        $this->setDisplayField('rol'); // Campo que se usará para mostrar en las listas desplegables
        $this->setPrimaryKey('id'); // Clave primaria de la tabla
    }
}

?>