<!-- src/Template/Layout/supervisor_layout.ctp -->

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'supervi']) ?>
</head>

<body>
    <nav id="header" class="navbar navbar-expand navbar-dark h4">
        <div class="navbar-collapse justify-content-center" id="navbarNav">
           <div class="sitio">
            <p>Supervisor</p>
           </div> 
        </div>
    </nav>
    
    <!-- <div class="container text-center titul">
        <?= $this->Html->link('Supervisor', ['controller' => 'supervisor', 'action' => 'index'], ['class' => 'sitio fas fa-home']) ?>
    </div> -->
    <!-- Contenido específico para la página del supervisor -->

    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?= $this->Html->script(["global"]) ?>
</body>

</html>