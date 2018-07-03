@extends('layouts.boulish')

@section('content')

    <h1 class="border-bottom">Promotions du moment</h1>

    <table class="table bg-white table-hover my-4">
        <thead>
            <tr class="bg-dark text-white">
            <th scope="col" style="width: 88%;">Promotions du moment</th>
            <th style="width: 12%;"></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">Hachi</th>

                <td class="text-right">5€ / portion</td>
            </tr>

            <tr>
                <th scope="row">Entrecôte</th>

                <td class="text-right">10€ les 100gr</td>
            </tr>

            <tr>
                <th scope="row">Filet de boeuf</th>

                <td class="text-right">12€ les 150gr</td>
            </tr>

            <tr>
                <th scope="row">Pinces de crabe</th>

                <td class="text-right">7€ les deux</td>
            </tr>

            <tr>
                <th colspan="2" scope="row" class="text-center text-success">
                    <i class="fa fa-2x fa-plus-circle"></i><br>
                    Ajouter une promotion
                </th>
            </tr>
        </tbody>
    </table>

@endsection