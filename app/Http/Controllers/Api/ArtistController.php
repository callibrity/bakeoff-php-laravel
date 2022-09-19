<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $artists = Artist::all();
        return response() -> json($artists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $artist = Artist::create($request->all());

        return response()->json($artist, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Artist $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Artist $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Artist $artist
     * @return JsonResponse
     */
    public function update(Request $request, Artist $artist)
    {
        $artist->update($request->all());

        return response()->json($artist, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Artist $artist
     * @return JsonResponse
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return response()->json($artist, 200);
    }
}
