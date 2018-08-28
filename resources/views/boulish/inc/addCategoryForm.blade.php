<thead>
    <tr class="bg-dark text-white">
        <th scope="col">
            <div class="form-group m-0">
                <div class="row">
                    <div class="col-4">
                        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nom de la catégorie']) }}
                    </div>

                    <div class="col-4">                                
                        {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Déscription']) }}
                    </div>

                    <div class="col-4">
                        {{ Form::submit('Ajouter la catégorie', ['class' => 'btn btn-secondary d-block ml-auto']) }}
                    </div>
                </div>
            </div>
        </th>
    </tr>
</thead>