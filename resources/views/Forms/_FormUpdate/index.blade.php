
<div class="form-group col-md-3">
    <label for="titulo" class="form-label">Título <small style="color: red;">*</small></label>
    <input  value="{{ isset($updates->titulo) ? $updates->titulo : '' }}"  value="{{ old('titulo') }}"
    type="text" name="titulo" class="form-control" id="exampleInputUsername1" placeholder="titulo" >
  </div>
  <div class="form-group col-md-3">
    <label for="categoria" class="form-label ">Categoria <small style="color: red;">*</small></label>
    <select style="color:black;!importante" class="form-control" name="categoria" id="exampleInputUsername1">
        @isset($updates->categoria)
            <option selected   value="{{ isset($updates->categoria) ? $updates->categoria : '' }}"value="{{ old('categoria') }}"
               >{{ $updates->categoria }}</option>
        @else
            <option selected disabled value="">Selecione:</option>
        @endisset
        <option value="Evento">Evento</option>
        <option value="Notícia">Notícia</option>
    </select>
</div>
  <div class="form-group col-md-3">
    <label for="data" class="form-label">Data <small style="color: red;">*</small></label>
    <input  value="{{ isset($updates->data) ? $updates->data : '' }}"  value="{{ old('data') }}"
    type="date" name="data" class="form-control" id="exampleInputUsername1" placeholder="" >
  </div>
  <div class="form-group col-md-3">
    <label for="foto" class="form-label">Foto de capa <small style="color: red;">*</small></label>
    <input   value="{{ isset($updates->foto) ? $updates->foto : '' }}" value="{{ old('foto') }}"
    type="file" name="foto"  class="form-control" id="exampleInputUsername1" placeholder="" >
  </div>
  <div class="col-md-3 form-group">
    <label for="resumo" class="form-label">Resumo da Actualização <small style="color: red;">*</small></label>
    <textarea class="form-control"name="resumo" >
        {{ isset($updates->resumo) ? $updates->resumo : '' }}
    </textarea>
</div>


