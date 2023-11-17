<div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="tabls col-12 text-center text-white">
              <h3 class="text-white">Clientes</h3>
              <i class="fas fa-users fa-6x mb-3"></i>
              <div class="mt-3 mb-3">
                <?= $this->Html->link('Lista Clientes', ['controller' => 'Clientes', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3']) ?>
                <?= $this->Html->link('Agregar Clientes', ['controller' => 'Clientes', 'action' => 'add '], ['class' => 'botones btn btn-lg ml-5 mb-3']) ?>
              </div>
            </div>
            <div class="tabls col-12 text-center text-white mt-5">
              <h3 class="text-white">Contactos</h3>
              <i class="fas fa-address-book fa-6x mb-3"></i>
              <div class="mt-3 mb-3">
                <?= $this->Html->link('Lista Contactos', ['controller' => 'Contactos', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3']) ?>
                <?= $this->Html->link('Agregar Contactos', ['controller' => 'Contactos', 'action' => 'add '], ['class' => 'botones btn btn-lg ml-5 mb-3']) ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="tabls col-12 text-center text-white">
              <h3 class="text-white">Productos</h3>
              <i class="fas fa-box-open fa-6x mb-3"></i>
              <div class="mt-3 mb-3">
                <?= $this->Html->link('Productos Panes', ['controller' => 'produpanes', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3 mr-5']) ?>
                <?= $this->Html->link('Productos Pasteles', ['controller' => 'produpasteles', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3']) ?>
                <?= $this->Html->link('Otros Productos', ['controller' => 'produotros', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3']) ?>
              </div>
            </div>
            <div class="tabls col-12 text-center text-white mt-5">
              <h3 class="text-white">Pedidos</h3>
              <i class="fas fa-shopping-cart fa-6x mb-3"></i>
              <div class="mt-3 mb-3">
                <?= $this->Html->link('Lista Pedidos', ['controller' => 'Pedidos', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3']) ?>
                <?= $this->Html->link('Agregar Pedidos', ['controller' => 'Pedidos', 'action' => 'add '], ['class' => 'botones btn btn-lg ml-5 mb-3']) ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="tabls col-12 text-center text-white">
              <h3 class="text-white">Proveedores</h3>
              <i class="fas fa-clipboard-list fa-6x mb-3"></i>
              <div class="mt-3 mb-3">
                <?= $this->Html->link('Lista Proveedores', ['controller' => 'Proveedores', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3']) ?>
                <?= $this->Html->link('Agregar Proveedores', ['controller' => 'Proveedores', 'action' => 'add '], ['class' => 'botones btn btn-lg ml-5 mb-3']) ?>
              </div>
            </div>
            <div class="tabls col-12 text-center text-white mt-5">
              <h3 class="text-white">Ventas</h3>
              <i class="fas fa-chart-line fa-6x mb-3"></i>
              <div class="mt-3 mb-3">
                <?= $this->Html->link('Lista Ventas', ['controller' => 'Ventas', 'action' => 'index'], ['class' => 'botones btn btn-lg mb-3']) ?>
                <?= $this->Html->link('Agregar Ventas', ['controller' => 'Ventas', 'action' => 'add '], ['class' => 'botones btn btn-lg ml-5 mb-3']) ?>
              </div>
            </div>
          </div>
        </div>
        <div class="salid container mt-5">
          <div class="d-flex">
            <a href="..\php\CerrarSesion.php" class="btn btn-lg">SALIR</a>
          </div>
        </div>
      </div>