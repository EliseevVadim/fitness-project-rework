<?php

namespace App\Http\Controllers;

use App\Models\MenuCalory;
use App\Models\ProgramContent;
use App\Models\TrainingLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramContentsController extends Controller
{
    public function showAll()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $programContents = ProgramContent::all();
        return view('admin.dashboard.programContent.programContentList', compact('programContents'));
    }

    public function openAddingForm()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $trainingLocations = TrainingLocation::all();
        $menuCalories = MenuCalory::all();
        return view('admin.dashboard.programContent.programContentAdd', compact('trainingLocations', 'menuCalories'));
    }

    public function addProgramContent(Request $request)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $input = $request->validate([
            'name' => 'required',
            'training_location_id' => 'required|integer',
            'menu_calories_id' => 'required|integer',
            'google_drive_link' => 'required'
        ]);
        ProgramContent::create($input);
        return redirect()->route('showAllContents');
    }

    public function openProgramContentEditingPage($id)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $programContent = ProgramContent::find($id);
        $trainingLocations = TrainingLocation::all();
        $menuCalories = MenuCalory::all();
        return view('admin.dashboard.programContent.programContentEdit', compact('trainingLocations', 'menuCalories', 'programContent'));
    }

    public function editProgramContent(Request $request, $id)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $programContent = ProgramContent::find($id);
        $input = $request->validate([
            'name' => 'required',
            'training_location_id' => 'required|integer',
            'menu_calories_id' => 'required|integer',
            'google_drive_link' => 'required'
        ]);
        $programContent->update($input);
        return redirect()->route('showAllContents');
    }

    public function deleteProgramContent($id)
    {
        ProgramContent::destroy($id);
    }
}
