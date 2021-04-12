@csrf
<div class="form-group">
    <a class='btn btn-secondary' style="float: right;" href="{{route('product.index')}}">Voltar</a>
    <div class="row">
        <div class="col-md-2">
            <input class="form-control" type="text" name="name" placeholder="Nome" value="{{$product->name ?? old('name')}}" required>
        </div>
        <div class="col-md-2">
            <input class="form-control" type="number" step='any' name="price" placeholder="Preço" value="{{$product->price ?? old('price')}}" required>
        </div>
        <div class="col-md-3">
            <select class="form-control" name="type_id" value="{{$product->type_id ?? old('type_id')}}" required>
                <option value="">escolha o tipo</option>
                    @foreach($types as $type)
                        <option @if(isset($product)) {{$product->type_id == $type->id ? 'selected' : ''}} @endif value="{{$type->id}}">{{ $type->id }} - {{ $type->label }}</option>
                    @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</div>

