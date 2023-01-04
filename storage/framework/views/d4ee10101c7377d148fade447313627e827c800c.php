<?php $__env->startSection('title', ' - mediateca de formadores'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.modal.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        #dataTables_Filter input {
            margin-left: 10%;
        }
    </style>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="7000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Mediateca <b>Valia.ao</b> </h2>
                    <p class="animate__animated animate__fadeInUp">
                        Mediateca de formação para formadores e professores
                        de acesso livre e gratuito. Faça o download de milhares
                        de Recursos Formativos / Educativos Abertos (manuais, ficheiros e apresentações PowerPoint).
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Mediateca <b>Valia.ao</b> </h2>
                    <p class="animate__animated animate__fadeInUp">
                        Mediateca de formação para formadores e professores
                        de acesso livre e gratuito. Faça o download de milhares
                        de Recursos Formativos / Educativos Abertos (manuais, ficheiros e apresentações PowerPoint).
                    </p>
                </div>
            </div>


            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->


    <main id="main">
        <section style="margin-top: 80px;">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="container justify-content-center" style="margin-top: 10px;">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#inicio"><i class="bi bi-house-fill"></i>
                                Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('mediateca')); ?>"><i class="bi bi-arrow-return-left"></i>
                                Voltar a página anterior</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="inicio">

                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>Categoria: <?php if(isset($fic->categoria)): ?>
                                            <?php echo e($fic->categoria); ?>

                                            <?php else: ?>
                                            0
                                        <?php endif; ?>  </th>

                                    </tr>
                                </thead>
                                <tbody>
<?php if(isset($ficheiros)): ?>

                                    <?php $__currentLoopData = $ficheiros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ficheiros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td>

                                            <div class="row">
                                                <div class="col-md-9">
                                                    <a href="<?php echo e(route('ListC',$ficheiros->id)); ?>"> <i  class="bi bi-file-pdf"></i> <?php echo e($ficheiros->titulo); ?> </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="<?php echo e(route('donwloadSoma',$ficheiros->id)); ?>" ><i class="bi bi-download"></i> Download</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-9">
                                                  <?php echo e($ficheiros->titulo); ?> (<?php $path =getcwd().'/storage/'.$ficheiros->ficheiro;
                                                  $pdf = file_get_contents($path);
                                                  $number = preg_match_all("/\/Page\W/", $pdf, $dummy);
                                                  echo $number;?> pág.)
                                                </div>
                                                <div class="col-md-3">
                                                    Criação <span style="padding-left:10%;">  <?php echo e($ficheiros->created_at); ?></span> <br>
                                                    Tamanho  <span style="padding-left:5%; "><?php

                                                    // Exibe arquivo com o tamanho
                                                    $decimals = 0;
                                                    $filename = getcwd().'/storage/'.$ficheiros->ficheiro;
                                                    $bytes= filesize($filename);
                                                    $sz = 'BKMGTP';
                                                    $factor = floor((strlen($bytes) - 1) / 3);
                                                    echo sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor].'B';

                                                    ?>  </span> <br>

                                                    Downloads <span style="padding-left:3%; "><?php echo e($ficheiros->donw); ?></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <?php echo $__env->make('layouts.site.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albertina Kiavuvu\valia\resources\views/site/mediateca/index/index.blade.php ENDPATH**/ ?>