<?php

namespace App\Http\Controllers;

use App\Models\Permit;
use App\Models\User;
use Illuminate\Http\Request;

class PermitController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.verify');
    }
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return $user->permits;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $permit = new Permit($request->all());
        $permit->user_id = $user->id;
        $permit->save();
        return response('success', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Permit $permit)
    {
        return $permit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Permit $permit)
    {
        return response('Unsupported. Contact abdulrahman almaneea and he\'ll tell you that you are طرار وتتشرط', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Permit $permit)
    {
        $permit->delete();
        return response('success', 200);
    }
}
