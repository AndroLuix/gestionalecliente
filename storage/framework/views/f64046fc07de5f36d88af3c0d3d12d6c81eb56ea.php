<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scheda Clienti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/sidebar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/clienti.css')); ?>">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div lang="en">


    <?php echo $__env->make('sidebar.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="page-content">

        <div class="container-fluid ">
            
            <div class="linea container-fluid">
                <h2>Clienti</h2>
                <button type="button" class="btn-nuovo" data-toggle="modal" data-target="#newClienteModal"><strong>Nuovo</strong></button>            </div>

            
            <div class="tabella-bg">

                
                <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class=" larghezza" id="search" name="search" placeholder="Cerca..."/>
                    </div>

                </form>

                
                <table class="table table-bordered" id="clienti-tabella">
                    <thead>
                    <tr>
                        <th>Codice</th>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Partita Iva</th>
                    </tr>

                    </thead>
                    <tbody>
                    <?php foreach ($cliente as $c){ ?>


                    <tr>
                        <td> <?= $c->codice ?></td>
                        <td><?php echo e($c->nome); ?></td>
                        <td><?php echo e($c->cognome); ?></td>
                        <td><?php echo e($c->email); ?></td>
                        <td><?php echo e($c->telefono); ?></td>
                        <td><?php echo e($c->piva); ?></td>

                    </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    
    
    <?php echo $__env->make('modal.nuovo-cliente', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;



    <div class="modal fade" id="newClienteModal" tabindex="-1" role="dialog" aria-labelledby="newClienteModalLabel"
         aria-hidden="true">
        <!-- Il contenuto del modal -->
    </div>

        <script>

            //codice JS per il flitro di ricerca
            document.addEventListener('DOMContentLoaded', function () {
                var searchInput = document.getElementById('search');
                var table = document.getElementById('clienti-tabella');
                var rows = table.getElementsByTagName('tr');

                searchInput.addEventListener('input', function () {
                    var searchQuery = searchInput.value.toLowerCase();

                    for (var i = 1; i < rows.length; i++) {
                        var rowData = rows[i].textContent.toLowerCase();
                        if (rowData.includes(searchQuery)) {
                            rows[i].style.display = '';
                        } else {
                            rows[i].style.display = 'none';
                        }
                    }
                });
            });


            //Codice JS per il pop-up
            document.addEventListener('DOMContentLoaded', function () {
                var searchInput = document.getElementById('search');
                var table = document.getElementById('clienti-tabella');
                var rows = table.getElementsByTagName('tr');

                searchInput.addEventListener('input', function () {
                    var searchQuery = searchInput.value.toLowerCase();

                    for (var i = 1; i < rows.length; i++) {
                        var rowData = rows[i].textContent.toLowerCase();
                        if (rowData.includes(searchQuery)) {
                            rows[i].style.display = '';
                        } else {
                            rows[i].style.display = 'none';
                        }
                    }
                });

                var salvaClienteBtn = document.getElementById('salvaClienteBtn');
                salvaClienteBtn.addEventListener('click', function () {
                    var codice = document.getElementById('codice').value;
                    var nome = document.getElementById('nome').value;
                    var cognome = document.getElementById('cognome').value;
                    var email = document.getElementById('email').value;
                    var telefono = document.getElementById('telefono').value;
                    var piva = document.getElementById('piva').value;

                    // Esegui l'operazione di salvataggio del nuovo cliente
                    // ...

                    // Chiudi il modal
                    var modal = document.getElementById('newClienteModal');
                    var bootstrapModal = bootstrap.Modal.getInstance(modal);
                    bootstrapModal.hide();
                });
            });



    </script>

    <script src="<?php echo e(asset('js/sidebar.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\Lui12\PhpstormProjects\gestionale-clienti\gestionale_clienti\resources\views/home.blade.php ENDPATH**/ ?>