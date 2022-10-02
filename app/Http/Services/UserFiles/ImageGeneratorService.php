<?php

namespace App\Http\Services\UserFiles;

use App\Models\UserFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageGeneratorService
{
    static string $IMAGE_API_URL = 'https://source.unsplash.com/random/200x200';

    /**
     * Base function to generate a random file image and store
     * @return void
     */
    public static function generateImage(): void
    {
        $url = self::$IMAGE_API_URL;
        $imageName =Str::uuid().'.jpg';
        Storage::put($imageName, file_get_contents($url));
        UserFile::create([
            'user_id' => Auth::user()->id,
            'filepath' => $imageName
        ]);
    }
}
