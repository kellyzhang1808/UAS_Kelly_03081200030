<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\tentangpegawai;
use Illuminate\Http\Request;

class tentangpegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tentangpegawai = tentangpegawai::where('Namapegawai', 'LIKE', "%$keyword%")
                ->orWhere('Usia', 'LIKE', "%$keyword%")
                ->orWhere('Jeniskelamin', 'LIKE', "%$keyword%")
                ->orWhere('Divisi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tentangpegawai = tentangpegawai::latest()->paginate($perPage);
        }

        return view('tentangpegawai.index', compact('tentangpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tentangpegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        tentangpegawai::create($requestData);

        return redirect('admin/tentangpegawai')->with('flash_message', 'tentangpegawai added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tentangpegawai = tentangpegawai::findOrFail($id);

        return view('tentangpegawai.show', compact('tentangpegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tentangpegawai = tentangpegawai::findOrFail($id);

        return view('tentangpegawai.edit', compact('tentangpegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $tentangpegawai = tentangpegawai::findOrFail($id);
        $tentangpegawai->update($requestData);

        return redirect('admin/tentangpegawai')->with('flash_message', 'tentangpegawai updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        tentangpegawai::destroy($id);

        return redirect('admin/tentangpegawai')->with('flash_message', 'tentangpegawai deleted!');
    }
}
