<th scope="row" colspan="2">
        <div class="row">
            <div class="col">
                {{ Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Cotelettes']) }}
            </div>
    
            <div class="col">
                {{ Form::text('description', $product->description, ['class' => 'form-control', 'placeholder' => 'Marinés à la sauce au caramel']) }}
            </div>
    
            <div class="col">
                <div class="row">
                    <div class="col-5">
                        {{ Form::number('price', $product->price, ['class' => 'form-control', 'placeholder' => '5,00']) }}
                    </div>
    
                    <div class="col-2">
                        <span style="font-size: 18px;">€ /</span>
                    </div>
    
                    <div class="col-5">
                        {{ Form::text('portion', $product->portion, ['class' => 'form-control', 'placeholder' => 'kg']) }}
                    </div>
                </div>
            </div>
        </div>
    </th>
    
    <td colspan="2" class="text-center">
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Modifier', ['class' => 'btn btn-primary w-100']) }}
    </td>