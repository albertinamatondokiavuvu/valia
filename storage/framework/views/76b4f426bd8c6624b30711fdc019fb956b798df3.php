
<div class="form-group col-md-3">
    <label for="titulo" class="form-label">Título <small style="color: red;">*</small></label>
    <input  value="<?php echo e(isset($updates->titulo) ? $updates->titulo : ''); ?>"  value="<?php echo e(old('titulo')); ?>"
    type="text" name="titulo" class="form-control" id="exampleInputUsername1" placeholder="titulo" >
  </div>
  <div class="form-group col-md-3">
    <label for="categoria" class="form-label ">Categoria <small style="color: red;">*</small></label>
    <select style="color:black;!importante" class="form-control" name="categoria" id="exampleInputUsername1">
        <?php if(isset($updates->categoria)): ?>
            <option selected   value="<?php echo e(isset($updates->categoria) ? $updates->categoria : ''); ?>"value="<?php echo e(old('categoria')); ?>"
               ><?php echo e($updates->categoria); ?></option>
        <?php else: ?>
            <option selected disabled value="">Selecione:</option>
        <?php endif; ?>
        <option value="Evento">Evento</option>
        <option value="Notícia">Notícia</option>
    </select>
</div>
  <div class="form-group col-md-3">
    <label for="data" class="form-label">Data <small style="color: red;">*</small></label>
    <input  value="<?php echo e(isset($updates->data) ? $updates->data : ''); ?>"  value="<?php echo e(old('data')); ?>"
    type="date" name="data" class="form-control" id="exampleInputUsername1" placeholder="" >
  </div>
  <div class="form-group col-md-3">
    <label for="foto" class="form-label">Foto de capa <small style="color: red;">*</small></label>
    <input   value="<?php echo e(isset($updates->foto) ? $updates->foto : ''); ?>" value="<?php echo e(old('foto')); ?>"
    type="file" name="foto"  class="form-control" id="exampleInputUsername1" placeholder="" >
  </div>
  <div class="col-md-3 form-group">
    <label for="resumo" class="form-label">Resumo da Actualização <small style="color: red;">*</small></label>
    <textarea class="form-control"name="resumo" >
        <?php echo e(isset($updates->resumo) ? $updates->resumo : ''); ?>

    </textarea>
</div>


<?php /**PATH C:\Users\Albertina Kiavuvu\valia\resources\views/forms/_FormUpdate/index.blade.php ENDPATH**/ ?>