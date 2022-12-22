

<?php $__env->startSection('content'); ?>
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Cursos</h5>
                        <p class="m-b-0">Cadastre o curso pretendido</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('site')); ?>"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Cursos</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Criar</a>
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
                        <h5>Criar Curso</h5>
                        <br>

    <small style="text-align: left; font-weight:bold;">Campos com <small style="color: red;">*</small> são campos obrigatórios</small>

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
                    <form action="<?php echo e(route('storecourse')); ?>" class="row" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('forms._FormCourse.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-group col-md-3">
                            <label for="" class="form-label text-white">.</label>
                            <button class="form-control btn  text-white" style="background:#2d58a8">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layoutadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\INADE 05\Documents\Projectos\valia\resources\views/admin/course/create/index.blade.php ENDPATH**/ ?>