<?php $__env->startSection("title","Animales"); ?>

<?php $__env->startSection("content"); ?>

    <div class="row justify-content-md-end">
        <div class="col">
            <a class="btn btn-success" href="<?php echo e(url("animales/create")); ?>"><i class="fa fa-plus"></i> Registrar Nuevo</a>
        </div>
    </div>
    <div class="row justify-content-md-end">
        <div class="col-10">
            <table class="table">
                <thead>
                <tr>
                    <th>No. Animal</th>
                    <th>Ganadero</th>
                    <th>Sexo</th>
                    <th>Tipo de Ganado</th>
                    <th>Dispositivo</th>
                    <th>Clave de animal</th>
                    <th>Peso</th>
                    <th>Edad</th>
                    <th colspan="2">Eliminar/Modificar</th>
                </tr>
                </thead>
                <?php $__currentLoopData = $animales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($animal->id_animal); ?></td>
                        <th><?php echo e($animal->getGanadero[0]->usuario); ?></th>
                        <th><?php echo e($animal->getSexos[0]->desc_sexo); ?></th>
                        <th><?php echo e($animal->getTipoganado[0]->desc_ganado); ?></th>
                        <th><?php echo e($animal->getDispositivo[0]->clave_dis); ?></th>
                        <td><?php echo e($animal->clave); ?></td>
                        <th><?php echo e($animal->peso); ?> kg</th>
                        <th><?php echo e($animal->edad); ?> años</th>
                        <td>
                            <form action="<?php echo e(route("animales.destroy",$animal->id_animal)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="<?php echo e(url("animales",$animal->id_animal)); ?>/edit" class="btn btn-outline-success"><i class="far fa-edit"></i> </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
            </table>
        </div>

            <!---->
        </div>
    </div>
    <div class="justify-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60292.77022777434!2d-100.16348866670677!3d19.182176229626894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd63813218f41f%3A0xb687c3a1fb52897c!2sValle+de+Bravo%2C+M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1557702457253!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("Inicio.layaut", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>