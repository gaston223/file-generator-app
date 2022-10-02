<?php

namespace App\Http\Controllers;


use App\Http\Services\UserFiles\ImageGeneratorService;
use App\Models\UserFile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        //
    }

    /**
     * Store a new userfile
     *
     * @param ImageGeneratorService $service
     * @return Response
     */
    public function store(ImageGeneratorService $service)
    {
        $service::generateImage();
        return redirect()->route('dashboard')->with('info', "The file generating is in progress, you will be informed when it's done");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserFile  $userFile
     * @return Response
     */
    public function show(UserFile $userFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserFile  $userFile
     * @return Response
     */
    public function edit(UserFile $userFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\UserFile  $userFile
     * @return Response
     */
    public function update(Request $request, UserFile $userFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserFile  $userFile
     * @return Response
     */
    public function destroy(UserFile $userFile)
    {
        //
    }
}
