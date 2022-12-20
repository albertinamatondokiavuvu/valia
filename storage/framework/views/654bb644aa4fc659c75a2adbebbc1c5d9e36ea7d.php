
<div class="form-group col-md-3">
    <label for="titulo" class="form-label ">titulo <small style="color: red;">*</small></label>
    <input  required value="<?php echo e(isset($gabaritos->titulo) ? $gabaritos->titulo : ''); ?>"  value="<?php echo e(old('titulo')); ?>" type="text"
    name="titulo" class="form-control" id="exampleInputUsername1" placeholder="nome do titulo">
</div>
<div class="form-group col-md-3">
    <label class="form-label " for="capa"> Foto de capa <small style="color: red;">*jpeg,jpg,png</small></label>
    <input hidden name="capa" value="<?php echo e(isset($gabaritos->capa) ? $gabaritos->capa : ''); ?>">
    <input  type="file" class="form-control" name="capa"
        value="<?php echo e(isset($gabaritos->capa) ? $gabaritos->capa : ''); ?>">
</div>
<div class="form-group col-md-3">
    <label class="form-label " for="documento">Documento<small style="color: red;">*pdf</small></label>
    <input hidden name="documento" value="<?php echo e(isset($gabaritos->documento) ? $gabaritos->documento : ''); ?>">
    <input  type="file" class="form-control" name="documento"
        value="<?php echo e(isset($gabaritos->documento) ? $gabaritos->documento : ''); ?>">
</div>
<?php /**PATH C:\Users\Albertina Kiavuvu\valia\resources\views/forms/_FormGabarito/index.blade.php ENDPATH**/ ?>