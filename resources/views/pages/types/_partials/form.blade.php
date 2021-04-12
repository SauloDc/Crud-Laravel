@csrf
<div class="form-group">
    <a class='btn btn-secondary' style="float: right;" href="{{route('product.index')}}">Voltar</a>

    <div class="row">
        <div class="col-md-2">
            <input class="form-control" type="text" name="label" placeholder="Label" value="{{$type->label ?? old('label')}}" required>
        </div>
        <div class="col-md-2">
            <input class="form-control" type="text" name="description" placeholder="descrição" value="{{$type->description ?? old('description')}}" required>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</div>

