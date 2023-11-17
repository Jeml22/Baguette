     <?php
        /**
         * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
         * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
         *
         * Licensed under The MIT License
         * For full copyright and license information, please see the LICENSE.txt
         * Redistributions of files must retain the above copyright notice.
         *
         * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
         * @link          https://cakephp.org CakePHP(tm) Project
         * @since         0.10.0
         * @license       https://opensource.org/licenses/mit-license.php MIT License
         * @var \App\View\AppView $this
         */


        ?>

     <!DOCTYPE html>
     <html lang="es">

     <head>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
         <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
     </head>

     <body>
         <nav id="header" class="navbar navbar-expand navbar-dark h4">
             <div class="navbar-collapse justify-content-center" id="navbarNav">
                 <ul class="navbar-nav ">
                     <li class="nav-item dropdown">
                         <a class="nav-link" href="#" id="menuClientes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <p class="texti ml-4">Clientes</p>
                         </a>
                         <div class="menus menus dropdown-menu" aria-labelledby="menuClientes">
                             <?= $this->Html->link('Lista Clientes', ['controller' => 'Clientes', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                             <?= $this->Html->link('Agregar Cliente', ['controller' => 'Clientes', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                             <?= $this->Html->link('Mensajes Clientes', ['controller' => 'Contactos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                         </div>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link" href="#" id="menuProductos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <p class="texti ml-4">Productos</p>
                         </a>
                         <div class="menus dropdown-menu" aria-labelledby="menuProductos">
                             <?= $this->Html->link('Productos Panes', ['controller' => 'produpanes', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                             <?= $this->Html->link('Productos Pasteles', ['controller' => 'produpasteles', 'action' => 'index '], ['class' => 'dropdown-item']) ?>
                             <?= $this->Html->link('Otros Productos', ['controller' => 'produotros', 'action' => 'index '], ['class' => 'dropdown-item']) ?>
                         </div>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link" href="#" id="menuPedidos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <p class="texti ml-4">Pedidos</p>
                         </a>
                         <div class="menus dropdown-menu" aria-labelledby="menuPedidos">
                             <?= $this->Html->link('Lista Pedidos', ['controller' => 'Pedidos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                             <?= $this->Html->link('Agregar Pedidos', ['controller' => 'Pedidos', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                         </div>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link" href="#" id="menuProveedores" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <p class="texti ml-4">Proveedores</p>
                         </a>
                         <div class="menus dropdown-menu" aria-labelledby="menuProveedores">
                             <?= $this->Html->link('Lista Proveedores', ['controller' => 'Proveedores', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                             <?= $this->Html->link('Agregar Proveedores', ['controller' => 'Proveedores', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                         </div>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link" href="#" id="menuVentas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <p class="texti ml-4">Ventas</p>
                         </a>
                         <div class="menus dropdown-menu" aria-labelledby="menuVentas">
                             <?= $this->Html->link('Lista Ventas', ['controller' => 'Ventas', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                         </div>
                     </li>
                 </ul>
             </div>
         </nav>
         <div class="text-center titul">
             <?= $this->Html->link('Mi sitio', ['controller' => 'Pages', 'action' => 'index'], ['class' => 'sitio fas fa-home']) ?>
         </div>

         <main class="main" id="main">
             <div class="container">
                 <?= $this->Flash->render() ?>
                 <?= $this->fetch('content') ?>
             </div>
         </main>
         <footer id="footer">
             <div class="foo">

             </div>
         </footer>

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <?= $this->Html->script(["global"]) ?>
     </body>

     </html>