<?php $__env->startSection('content'); ?>
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Cursos</h5>
                        <p class="m-b-0">Listar o curso pretendido</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('site')); ?>"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Cursos</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Listar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-left">
                        <h5>Listar Curso</h5>


                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <!-- button Default -->
                    <table id="table_id" class="display expandable-table" style="width:100%">
                        <thead class="thead-dark">
                            <th>Nº</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center">Curso</th>
                            <th class="text-center">Resumo</th>
                            <th class="text-center">Data</th>
                            <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white ">
                            <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cursos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$i); ?></td>
                                <td class="text-center"><img src="/storage/<?php echo e($cursos->foto); ?>" width="50" height="50" alt=""></td>
                                <td class="text-center"><?php echo e($cursos->curso); ?></td>
                                <td class="text-center"><a href="/storage/<?php echo e($cursos->resumo); ?>">Resumo do Curso</a></td>
                                <td class="text-center"><?php echo e(date('d-m-Y', strtotime($cursos->created_at))); ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-clone" aria-hidden="true"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item btn btn-secondary "

                                            href="<?php echo e(route('editcourse',$cursos->id)); ?>">Editar</a>
                                            <form action="<?php echo e(route('deletecourse',$cursos->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>

                                                <a class="dropdown-item btn btn-secondary remove-user"
                                                    data-confirm="Tem certeza que deseja eliminar?"
                                                    href="<?php echo e(route('deletecourse',$cursos->id)); ?>">Eliminar</a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albertina Kiavuvu\valia\resources\views/admin/course/list/index.blade.php ENDPATH**/ ?>