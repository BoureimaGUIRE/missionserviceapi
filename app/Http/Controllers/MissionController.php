<?php

namespace App\Http\Controllers;

use App\Models\Mission;
class MissionController extends Controller
{

    public function index()
    {
        $Missions = Mission::all();
        return $this->successResponse($Missions);
    }

    public function show($id)
    {
        $Mission = Mission::findOrFail($id);
        return $this->successResponse($Mission);
    }

}