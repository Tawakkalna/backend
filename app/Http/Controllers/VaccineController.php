<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify')->only([
            'store',
            'update',
            'destroy'
        ]);
    }

    public function index()
    {
        return Vaccine::all();
    }

    public function store(Request $request)
    {
        $vaccine = new Vaccine($request->all());
        $vaccine->save();
        return response('success', 200);
    }

    public function show(Vaccine $vaccine)
    {
        return $vaccine;
    }

    public function update(Request $request, Vaccine $vaccine)
    {
        $updatedVaccine = new Vaccine($request->all());
        if ($updatedVaccine->name != null) {
            $vaccine->name = $updatedVaccine->name;
            $vaccine->save();
            return response('success', 200);
        }
        return response('New vaccine name is missing', 400);
    }

    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return response('success', 200);
    }
}
