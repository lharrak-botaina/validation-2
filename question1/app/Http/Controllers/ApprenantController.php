<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprenants=Apprenant::all();
        return $apprenants;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $apprenant= new Apprenant();
        $apprenant->name=$request->input('name');
        $apprenant->email=$request->input('email');
        $apprenant->idee=$request->input('idee');
        $apprenant->save();
        return response()->json($apprenant);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apprenant =Apprenant::find($id);
        return  $apprenant;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $apprenant = Apprenant::find($id);
        $apprenant->name=$request->input('name');
        $apprenant->email=$request->input('email');
        $apprenant->idee=$request->input('idee');
        $apprenant->save();
        return response()->json($apprenant);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function check(Request $request ,$email){
        $filer = Apprenant::where('email','like','%'.$email.'%')
        ->get();
        if($filer->count()>=1){
            return response()->json([
                'message'=>"existe"
            ]);
        }else{
            return response()->json([
                'message' => "n'extest pas"
            ]);
        }
    }


    public function idee(){
        $apprenants=Apprenant::get('idee');
        return $apprenants;
    }
}
