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
                                        <th>Número de Categorias: </th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>

                                        <td>
                                            <div class="row">
                                                <div class="col-9">
                                                    <a href=""> <img src="" alt=""> reste de uma </a>
                                                </div>
                                                <div class="col-3">
                                                    ficheiros: 1000
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>$86,500</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                        <div class="tab-pane container fade" id="file">
                            <div class="col-8 justify-content-center">


                                <form>
                                    <div class="form-group col-md-4">
                                        <label for="ficheiro" class="form-label">ficheiro <small
                                                style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('ficheiro')); ?>"
                                            value="<?php echo e(isset($users->ficheiro) ? $users->ficheiro : ''); ?>" type="file"
                                            name="ficheiro" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="titulo" class="form-label">Título <small
                                                style="color: red;">*</small></label>
                                        <input value="<?php echo e(old('titulo')); ?>"
                                            value="<?php echo e(isset($users->titulo) ? $users->titulo : ''); ?>" type="text"
                                            name="titulo" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tipoDocumento" class="form-label ">Categoria <small
                                                style="color: red;">*</small></label>
                                        <select style="color:black;!importante" class="form-control select2"
                                            name="categoria" id="">

                                            <option selected disabled value="">Selecione:</option>

                                            <option value="Bilhete de Identidade">Bilhete de Identidade</option>
                                            <option value="Passaporte">Passaporte</option>
                                            <option value="Cédula Pessoal">Cédula Pessoal</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="descricao" class="form-label">Título <small
                                                style="color: red;">*</small></label>
                                        <textarea class="form-control" name="descricao" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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

<?php echo $__env->make('layouts.site.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albertina Kiavuvu\valia\resources\views/site/mediateca/list/index.blade.php ENDPATH**/ ?>