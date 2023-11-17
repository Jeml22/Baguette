<?php 
// src/Controller/SupervisorController.php

namespace App\Controller;

use App\Controller\AppController;

class SupervisorController extends AppController
{
    public function supervisorIndex()
{
    // Tu lógica aquí si es necesaria
    $this->render('supervisor');
}

}
