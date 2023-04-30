<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YoutubeJsLoaderController extends Controller
{

    public function optimizer(Request $request)
    {
        $sizeHeight = $request->height;
        $sizeWidth = $request->width;
        $youtubeLink = $request->youtube_link;

        if($sizeHeight ==  null)
        {
         $sizeHeight = '560';
        }

        if($sizeWidth == null){
            $sizeWidth = '315';
        }

        $outDetails = [
            'video_height' => $sizeHeight,
            'video_width' => $sizeWidth,
            'youtube_link' => $youtubeLink,
            'player_code' => '<iframe width="'.$sizeWidth.'" height="'.$sizeHeight.'" src="'.$youtubeLink.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
        ];

        return response()->json($outDetails,200);
    }
}
