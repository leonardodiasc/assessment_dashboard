<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        return Grade::all();
    }

    public function store(Request $request)
    {
        return Grade::create($request->all());
    }
    public function search($name)
    {
        return Grade::where('educator', 'like', '%'.$name.'%')->get();
    }


    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->update($request->all());

        return $grade;
    }

    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();

        return 204;
    }
}

