<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

class PromotionsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        // Edit Promotion
        $promo = new Promotion;
        $promo->name = $request->input('name');
        $promo->description = $request->input('description');
        $promo->save();

        return redirect('/boulish/promotions')->with('success', 'Promotion ajoutée');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        // Edit Promotion
        $promo = Promotion::find($id);
        $promo->name = $request->input('name');
        $promo->description = $request->input('description');
        $promo->save();

        return redirect('/boulish/promotions')->with('success', 'Promotion modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete promotion
        $promo = Promotion::find($id);
        $promo->delete();

        return redirect('/boulish/promotions')->with('success', 'Promotion supprimée');
    }
}
