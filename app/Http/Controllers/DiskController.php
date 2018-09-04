<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiskRequest;
use App\Models\Disk;
use App\Models\Singer;
use Illuminate\Http\Response;

class DiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $disks = Disk::paginate(15);
        return view('disk.index', ['disks' => $disks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $singers = Singer::all();
        if ($singers->count() === 0) {
            foreach (config('defaultSingers') as $singer) {
                Singer::create($singer);
            }
            $singers = Singer::all();
        }

        return view('disk.create', ['singers' => $singers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DiskRequest $request
     * @return Response
     */
    public function store(DiskRequest $request)
    {
        Disk::create($request->all());
        return redirect(route('disk.index'))
            ->with('status', 'Disk Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disk $disk
     * @return Response
     */
    public function edit(Disk $disk)
    {
        $singers = Singer::all();
        return view('disk.edit', ['singers' => $singers, 'disk' => $disk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DiskRequest $request
     * @param  \App\Models\Disk $disk
     * @return Response
     */
    public function update(DiskRequest $request, Disk $disk)
    {
        $disk->update($request->all());
        return redirect(route('disk.index'))
            ->with('status', 'Disk Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disk $disk
     * @return Response
     * @throws \Exception
     */
    public function destroy(Disk $disk)
    {
        $disk->delete();
        return redirect(route('disk.index'))
            ->with('status', 'Disk Deleted Successfully');
    }
}
