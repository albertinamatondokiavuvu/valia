
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
                            <a class="nav-link" data-bs-toggle="tab" href="#file"><i
                                    class="bi bi-file-earmark-plus-fill"></i> Enviar ficheiro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#hist"><i class="bi bi-folder-fill"></i>
                                histórico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#est"><i class="bi bi-bar-chart-fill"></i>
                                Estatística</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#ajuda"><i
                                    class="bi bi-question-circle-fill"></i> Ajuda</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="inicio">

                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Número de Categorias: <?php if(isset($categorias)): ?>
                                            <?php echo e($categorias); ?>

                                            <?php else: ?>
                                            0
                                        <?php endif; ?>  </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td>
                                            <div class="row">
                                                <div class="col-9">
                                                    <a href="<?php echo e(route('ViewCategory',$categoria->categoria)); ?>"> <img src="" alt=""> <?php echo e($categoria->categoria); ?> </a>
                                                </div>
                                                <div class="col-3">
                                                    ficheiros: <?php echo e($categoria->ficheiro); ?>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </tbody>

                            </table>
                        </div>
                        <div class="tab-pane container fade" id="file">
                            <div class="col-8 justify-content-center">
<?php if(Auth::check()): ?>


                                <form action="<?php echo e(route('storemediateca')); ?>" class="row" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group col-md-6">
                                        <label for="fotografia" class="form-label">Fotografia <small
                                                style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('ficheiro')); ?>"
                                            type="file" name="fotografia" class="form-control" id="fotografia">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nomeCompleto" class="form-label">Nome Completo <small
                                                style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('titulo')); ?>"
                                            type="text"
                                            name="nomeCompleto" class="form-control" id="nomeCompleto">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cv" class="form-label">Curriculum Vitae
                                            <small style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('ficheiro')); ?>"
                                            type="file" name="cv" class="form-control" id="cv">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email" class="form-label">email <small
                                                style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('titulo')); ?>"
                                            type="email"
                                            name="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="areaFormacao" class="form-label">Area de formação
                                            <small style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('ficheiro')); ?>"
                                            type="text" name="areaFormacao" class="form-control" id="areaFormacao">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="categoria" class="form-label ">Categoria <small
                                                style="color: red;">*</small></label>
                                        <select style="color:black;!importante" class="form-control select2"
                                            name="categoria" id="categoria">

                                            <option selected disabled value="">Selecione:</option>

                                            <option value="Bilhete de Identidade">Bilhete de Identidade</option>
                                            <option value="Passaporte">Passaporte</option>
                                            <option value="Cédula Pessoal">Cédula Pessoal</option>
                                        </select>
                                    </div>
                                                                     
                                    <div class="form-group col-md-12">
                                        <label for="localidade" class="form-label">Localidade 
                                            <small style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('ficheiro')); ?>"
                                            type="text" name="localidade" class="form-control" id="localidade">
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Carregar</button>
                                </form> 
                                <?php else: ?>
                                <br>
                                <p>Esta funcionalidade requer login</p>
                                <?php endif; ?>
                            </div>

                        </div>
                        <div class="tab-pane container fade" id="hist">This is a setting tab.</div>
                        <div class="tab-pane container fade" id="est">This is a profile tab.</div>
                        <div class="tab-pane container fade" id="ajuda">This is a setting tab.</div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->


    <?php echo $__env->make('layouts.site.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\INADE 05\Documents\Projectos\valia\resources\views/site/mediateca/list/index.blade.php ENDPATH**/ ?>