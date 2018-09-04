<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    /**
     * Load Singers list
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singers()
    {
        $singers = Singer::paginate(15);
        if ($singers->count() === 0) {
            foreach (config('defaultSingers') as $singer) {
                Singer::create($singer);
            }
            $singers = Singer::paginate(15);
        }

        return view('singer.index', ['singers' => $singers]);
    }

    /**
     * Return Disks that belong to user
     * @param Singer $singer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singerDisks(Singer $singer)
    {
        $singer->load('disks');
        return view('singer.disks', ['singer' => $singer]);
    }
}
