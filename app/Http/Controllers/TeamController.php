<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamUpdateRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::where('deleted_status', 0)->get();
        return view("admin/teams/index", ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/teams/add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required|string|max:20",
            'prenom' => "required|string|max:20",
            'current_post' => "required|string|max:50",
            'eamil_adress' => "email",
            'phone_number' => 'required|numeric|digits:8',
            'picture_path' => 'required|file|mimes:jpg,png|max:800'
        ], [
            'name.required' => "Le Nom est Requis",
            'name.max' => "Le nom ne doit pas depasser 20 Caracteres",
            'prenom.required' => "Le Prenom est required",
            'prenom.max' => "Le prenom peux pas depasser 20 caracteres",
            'current_post.required' => "Le poste est requis",
            'current_post.max' => "Le poste peux pas depasser 50caracteres",
            'phone_number.required' => 'Numero de Telephone requis',
            'phone_number.digits' => 'Numero de telephone doit faire au minimum 8 chiffres',
            'picture_path.required' => 'Photo requis'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $team = new Team();
        if ($request->file()) {
            $fileName = time() . '_' . $request->file('picture_path')->getClientOriginalName();
            $request->file('picture_path')->storeAs('uploads', $fileName, 'public');
            $team->picture_path = time() . '_' . $request->file('picture_path')->getClientOriginalName();
            $team->name = $request->get('name');
            $team->prenom = $request->get('prenom');
            $team->current_post = $request->get('current_post');
            $team->eamil_adress = $request->get('eamil_adress');
            $team->phone_number = $request->get('phone_number');
            $team->save();
        }
        return redirect("/teams")
            ->with('success', 'Le Membre ajoute.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view("admin/teams/edit", ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamUpdateRequest $request, Team $team)
    {
        if ($request->validated()) {
            if (request()->hasFile('picture_path')) {
                $imagePath = public_path('storage/uploads/' . $team->picture_path);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
                $fileName = time() . '_' . $request->file('picture_path')->getClientOriginalName();
                $request->file('picture_path')->storeAs('uploads', $fileName, 'public');
                $team->update([
                    'name' => request()->name,
                    'prenom' => request()->prenom,
                    'current_post' => request()->current_post,
                    'eamil_adress' => request()->eamil_adress,
                    'phone_number' => request()->phone_number,
                    'picture_path' => $fileName,
                ]);
            }
            return redirect("/teams")
                ->with('success', 'Le Membre Modifie avec Success.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $is = $team->update(['deleted_status' => 1]);
        if ($is) {
            return redirect("/teams")->with("delete", "Membre Supprime avec Success");
        }
    }
}
