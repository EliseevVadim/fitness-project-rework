<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingUserStoreRequest;
use App\Http\Requests\TrainingUserUpdateRequest;
use App\Http\Resources\TrainingUserCollection;
use App\Http\Resources\TrainingUserResource;
use App\Models\TrainingUser;
use App\Models\Training;
use App\Models\Days;
use App\Models\TrainingLocation;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TrainingUserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user()->id;
        $trainingsUser = TrainingUser::with('training')->with('trainingLocation')->where('user_id','=',$user)->get();
        foreach($trainingsUser as $tr_u)
        {
            $tr_u->days = Days::all()->where('training_id','=',$tr_u->training_id);
        }
        return response()->json($trainingsUser);
    }

    public function store(TrainingUserStoreRequest $request)
    {
        $trainingUser = TrainingUser::create($request->validated());
        return response()->json($trainingUser);
    }

    public function show(Request $request, $trainingUserId)
    {
        $user = Auth::user()->id;
        $trainingsUser = TrainingUser::with('training')->where('user_id','=',$user);
        foreach($trainingsUser as $item){
            if($item->id == $trainingUserId){
                return response()->json($item);
            }
        }
        return response()->json();
    }

    public function update(TrainingUserUpdateRequest $request, $trainingUserId)
    {
        $user = Auth::user()->id;
        $trainingsUser = TrainingUser::where('user_id','=',$user);
        foreach($trainingsUser as $item){
            if($item->id == $trainingUserId){
                $item->update($request->validated());
                return response()->noContent();
            }
        }
        return response()->noContent();
    }

    public function destroy(Request $request, $trainingUserId)
    {
        $user = Auth::user()->id;
        $trainingsUser = TrainingUser::where('user_id','=',$user);
        foreach($trainingsUser as $item){
            if($item->id == $trainingUserId){
                $item->delete();
                return response()->noContent();
            }
        }
        return response()->noContent();
    }
}
