@csrf
<div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <input class="form-control" type="text" name="name" placeholder="Nome" value="{{$product->name ?? old('name')}}">
        </div>
        <div class="col-md-2">
            <input class="form-control" type="text" name="price" placeholder="Preço" value="{{$product->price ?? old('price')}}">
        </div>
        <div class="col-md-2">
            <select class="form-control" name="type_id" value="{{$product->type_id ?? old('type_id')}}">
                <option value="">escolha o tipo</option>
                    @foreach($types as $type)
                        <option @if(isset($product)) {{$product->type_id == $type->id ? 'selected' : ''}} @endif value="{{$type->id}}">{{$type->label}}</option>
                    @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</div>

