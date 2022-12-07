
<div class="form-group col-md-3">
    <label for="curso" class="form-label ">Curso <small style="color: red;">*</small></label>
    <input  required value="<?php echo e(isset($cursos->curso) ? $cursos->curso : ''); ?>"  value="<?php echo e(old('curso')); ?>" type="text"
    name="curso" class="form-control" id="exampleInputUsername1" placeholder="nome do curso">
</div>
<div class="form-group col-md-3">
    <label class="form-label " for="foto">Foto <small style="color: red;">*jpeg,jpg,png</small></label>
    <input hidden name="foto" value="<?php echo e(isset($cursos->foto) ? $cursos->foto : ''); ?>">
    <input  type="file" class="form-control" name="foto"
        value="<?php echo e(isset($cursos->foto) ? $cursos->foto : ''); ?>">
</div>

<div class="form-group col-md-3">
    <label class="form-label " for="resumo">Resumo <small style="color: red;">*pdf</small></label>
    <input hidden name="resumo" value="<?php echo e(isset($cursos->resumo) ? $cursos->resumo : ''); ?>">
    <input   type="file" class="form-control" name="resumo"
        value="<?php echo e(isset($cursos->resumo) ? $cursos->resumo : ''); ?>">
</div>
<?php /**PATH C:\Users\Albertina Kiavuvu\valia\resources\views/forms/_FormCourse/index.blade.php ENDPATH**/ ?>