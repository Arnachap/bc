<tr class="bg-dark text-white">
    <div class="form-group m-0">
        <th scope="col" style="width: 80%;">
            <div class="row">
                <div class="col">
                    {{ Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nom de la catégorie']) }}
                </div>

                <div class="col">
                    {{ Form::text('description', $category->description, ['class' => 'form-control', 'placeholder' => 'Déscription']) }}
                </div>
            </div>
        </th>
    
        <th style="width: 10%;"></th>
    
        <th style="width: 10%;" colspan="2">
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Modifier la catégorie', ['class' => 'btn btn-primary d-block ml-auto']) }}
        </th>
    </div>
</tr>