<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyMeal;

class DailyMealsController extends Controller
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
            'name' => 'required',
            'date' => 'required',
            'price' => 'required'
        ]);

        // Add daily meal
        $meal = new DailyMeal;
        $meal->name = $request->input('name');
        $meal->description = $request->input('description');
        $meal->date = $request->input('date');
        $meal->price = $request->input('price');
        $meal->portion = $request->input('portion');
        $meal->save();

        return redirect('/boulish/meals')->with('success', 'Plat du jour ajouté');
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
            'name' => 'required',
            'date' => 'required',
            'price' => 'required'
        ]);

        // Add daily meal
        $meal = DailyMeal::find($id);
        $meal->name = $request->input('name');
        $meal->description = $request->input('description');
        $meal->date = $request->input('date');
        $meal->price = $request->input('price');
        $meal->portion = $request->input('portion');
        $meal->save();

        return redirect('/boulish/meals')->with('success', 'Plat du jour modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal = DailyMeal::find($id);
        $meal->delete();

        return redirect('/boulish/meals')->with('success', 'Plat du jour supprimé');
    }
}
