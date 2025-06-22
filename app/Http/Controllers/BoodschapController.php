<?php

namespace App\Http\Controllers;

use App\Models\Boodschap;
use Illuminate\Http\Request;


class BoodschapController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'naam' => 'required',
        'email' => 'required',
        'boodschap' => 'required',
    ]);

    $message = new Boodschap;
    $message->naam = $validated['naam'];
    $message->email = $validated['email'];
    $message->boodschap = $validated['boodschap'];
    $message->save();

    return redirect('/')->with('success', 'De boodschap is opgeslagen');
}

    public function index()
    {
        $boodschappen = Boodschap::all();
	        return view('boodschappen')->with('boodschappen', $boodschappen);

    }

    public function create()
    {
        //
    }


    public function show(Boodschap $boodschap)
    {
        //
    }


   public function edit($id)
{
	$boodschap = Boodschap::find($id);
	return view('edit')->with('boodschap', $boodschap);


}



    public function update(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required',
            'boodschap' => 'required'
        ]);

        $boodschap = Boodschap::find($request->input('id'));

        if (!$boodschap) {
            return back()->with('error', 'Boodschap niet gevonden.');
        }

        $boodschap->email = $request->input('email');
        $boodschap->naam = $validated['naam'];
        $boodschap->boodschap = $validated['boodschap'];
        $boodschap->save();

        return redirect('/boodschappen')->with('success', 'Boodschap bijgewerkt.');
    }


   public function destroy($id)

    {

        Boodschap::destroy($id);
	    return redirect('/boodschappen');

    }

}
