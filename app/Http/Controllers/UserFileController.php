<?php

namespace App\Http\Controllers;


use App\Http\Services\UserFiles\ImageGeneratorService;
use App\Models\UserFile;
use Illuminate\Container\Container;
use Faker\Generator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
    public function create(ImageGeneratorService $service)
    {
        $service::generateImage();
        return redirect()->route('dashboard')->with('info', "The file generating is in progress, you will be informed when it's done");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserFile  $userFile
     * @return \Illuminate\Http\Response
     */
    public function show(UserFile $userFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserFile  $userFile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserFile $userFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserFile  $userFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserFile $userFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserFile  $userFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserFile $userFile)
    {
        //
    }
}
