<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    private $table = 'portofolios';
    private $primarykey = 'id';
    

    public function beranda()
    {
        return view('dashboard.landing');
    }


    public function upload()
    {
        return view('dashboard.master');
    }
 

    public function index()
    {
        $data_portofolio['data_portofolio'] = Portofolio::orderBy('id')->get();
        return view('dashboard.edit', $data_portofolio);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('/public/image');
            $filename = $request->file('image')->hashName();
            $validPath =  url('/').'/storage/image/' . $filename;

            Portofolio::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $validPath
        ]);
        return redirect()->back()->with('OK', 'Image data has been stored !');
        
        
        }else{
            Portofolio::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->back();
        }
        
    }

    public function updatePortfolio(Request $request)
    {
        DB::table($this->table)->where($this->primarykey, $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->back();
    }

    public function deletePortfolio($id)
    {
        DB::table($this->table)->where($this->primarykey, $id)->delete();

        return redirect()->back()->with("OK", "Data Deleted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return view('dashboard.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        //
    }
}
