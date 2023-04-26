<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use App\Models\User;
use PDF;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $learning = Learning::all();
        return view('index')->with('learning',$learning);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gallerie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $learning= learning::find($id);
       return view('edit',['learning' => $learning]);
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
        //

         $learning= learning::find($id);
         $learning->name= $request->input('name');
         $learning->prenom= $request->input('prenom');
          $learning->email= $request->input('email');
         $learning->pays= $request->input('pays');
          $learning->photo= $request->input('photo');
          $learning->pdf= $request->input('pdf');
          $learning->word= $request->input('word');
          $learning->save();
          return "donnée modifier avec succès";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function remove($id){
        $learning= learning::find($id);
        $learning->delete();
        return "donnée supprimée";
    }

    public function document(Request $request)
    {
        //dd($request);

          $path = $request->file('file')->store('docs');

           return $path;
    }

    public function upload(Request $request){

        $requestData = $request->all();
        // dd($request->file('file'));

        $fileName= time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('public',$fileName);
         $requestData["photo"]='/storage/'.$path;
         learning :: Create($requestData);

        return redirect()->to ('/')->with('flash_message', 'photo ajoutée');


    }

    public function sauvegard(){
        return view('gallerie');
    }

    public function pdf(){
        return view('pdf');
    }

     public function word(){
        return view('word');
    }
     public function liste(){
        $learning = learning::all();
        return view('liste', compact('learning'));
    }
}






