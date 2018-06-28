<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceCategory;

class ServiceCategoriesController extends Controller
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

        // Add category
        $serviceCategory = new ServiceCategory;
        $serviceCategory->name = $request->input('name');
        $serviceCategory->description = $request->input('description');
        $serviceCategory->save();

        return redirect('/boulish/services')->with('success', 'Catégorie ajoutée');
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

        // Edit category
        $serviceCategory = ServiceCategory::find($id);
        $serviceCategory->name = $request->input('name');
        $serviceCategory->description = $request->input('description');
        $serviceCategory->save();

        return redirect('/boulish/services')->with('success', 'Catégorie modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ServiceCategory::find($id);
        $category->delete();

        return redirect('/boulish/services')->with('success', 'Catégorie supprimée');
    }
}
