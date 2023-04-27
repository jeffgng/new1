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
        return view('liste');
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
          //return "donnée modifier avec succès";
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //

         $learning= learning::find($id);
        $learning->delete();
        return back();
    }


    public function remove($id){

     }

    /********************************stockage de données pdf**************************************** */
    public function document(Request $request)
    {
        //dd($request);
         $requestDonnee = $request->all();
        // dd($request->file('file'));
        $fileName= time().$request->file('pdf')->getClientOriginalName();
        $path = $request->file('pdf')->storeAs('public',$fileName);
         $requestDonnee["pdf"]='/storage/'.$path;
         learning :: Create($requestDonnee);
          //$path = $request->file('file')->store('docs');
           return $path;
    }

    public function pdf(){
        return view('pdf');
    }



    /********************************stockage de données gallerie**************************************** */
    public function upload(Request $request){

        $requestData = $request->all();
        // dd($request->file('file'));

        $fileName= time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('public',$fileName);
         $requestData["photo"]='/storage/'.$path;
         learning :: Create($requestData);
        return $path;


    }
    public function sauvegard(){
        return view('gallerie');
    }



    /********************************stockage de données word**************************************** */

     public function word(){
        return view('word');
    }

    public function worddoc(Request $request)
    {
        //dd($request);
         $requestWord = $request->all();
        // dd($request->file('file'));
        $fileName= time().$request->file('word')->getClientOriginalName();
        $path = $request->file('word')->storeAs('public',$fileName);
         $requestWord["word"]='/storage/'.$path;
         learning :: Create($requestWord);
          //$path = $request->file('file')->store('docs');
           return $path;
    }


    /***************************************affichage des données*******************/
     public function liste(){
        $learning = learning::all();
        return view('liste', compact('learning'));
    }

    public function home(){
        return view('home');
    }


    public function deconnexion()
{
    auth()->logout();

    return redirect('/');
}
}






