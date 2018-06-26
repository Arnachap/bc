<th scope="row" colspan="2">
    <div class="row">
        <div class="col">
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nom du produit']) }}
        </div>

        <div class="col">
            {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description']) }}
        </div>

        <div class="col">
            <div class="row">
                <div class="col-5">
                    {{ Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Prix', 'step' => '0.01']) }}
                </div>

                <div class="col-2">
                    <span style="font-size: 18px;">€ /</span>
                </div>

                <div class="col-5">
                    {{ Form::text('portion', '', ['class' => 'form-control', 'placeholder' => 'Portion']) }}
                </div>
            </div>
        </div>
    </div>
</th>

<td colspan="2" class="text-center">
    {{ Form::submit('Ajouter', ['class' => 'btn btn-primary w-100']) }}
</td>