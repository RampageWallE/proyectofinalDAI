@extends('layouts.app')

@section('titulo', 'CLIENTES INGRESADOS')

@section('content')


    <div class="container my-3">
    <h3>CLIENTES EXISTENTES Y SUS DATOS</h3>  

    <table class="table table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>email</th>
                <th>Contraseña</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        
        <!-- <?php echo $cliente ?>  -->

        <tbody>
            <?php 
                foreach ($cliente as $user){
            ?>
            <tr>
                <td><?php echo $user->_id ?></td>
                <td><?php echo $user->nombre ?></td>
                <td><?php echo $user->apellido ?></td>
                <td><?php echo $user->dni?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->passwd?></td>
                <td class="text-center">
                    <form action="" method="post">
                        <button class="btn btn-warning">
                            EDITAR
                        </button>
                    </form>
                </td>
                <td class="text-center">
                    <form action="" method="delete">
                        <button class="btn btn-danger">
                            ELIMINAR
                        </button>
                    </form>
                </td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    
@endsection

