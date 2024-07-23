<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HCP;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HCPController extends Controller
{
    public function showForm()
    {
        return view('registerhcp');
    }

    public function submitForm(Request $request)
    {
        $attempt = 1 ;
        // Validate form data
        $validatedData = $request->validate([
            'dvc_code' => 'required|string|max:255',
            'hcp_name' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'hospital' => 'required|string|max:255',
        ]);

        // Process or save data
        $hcp = new HCP();
        $hcp->dvc_code = $request->input('dvc_code');
        $hcp->hcp_name = $request->input('hcp_name');
        $hcp->qualification = $request->input('qualification');
        $hcp->city = $request->input('city');
        $hcp->hospital = $request->input('hospital');
        $hcp->attempt = $attempt;
        $hcp->users = Auth::user()->id;
        $hcp->save();

        $insertedId = $hcp->id;

        // Store the inserted ID in the session until the user logs out
        session()->put('inserted_hcp_id', $insertedId);

        // Redirect with success message
        return redirect()->route('registerhcp.success',['id' => 1])->with('status', 'Registration successful!');
    }

    public function success($id)
    {
        // dd($id);
        $qy ="select * from questions where id = '$id'";
        $questions = DB::select($qy);
        // $questions = Question::where('id',$id)->get();
        return view('quiz',['questions' => $questions]);
    }
}
