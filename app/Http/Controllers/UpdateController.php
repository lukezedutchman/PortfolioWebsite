<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function store(Request $request){
        $Project = new project;
        $Project->category_id = $request->projectname;
        $Project->name = $request->startdate;
        $Project->price = $request->enddate;
        $Project->quantity = $request->description;
        $Project->description = $request->system_details;
        $Project->description = $request->comment;
        $Project->save();
    }
}
