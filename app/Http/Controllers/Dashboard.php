<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $data_mahasiswa = \App\Profil_NIM::all();
        return view('about_nim', ['data_mahasiswa' => $data_mahasiswa]);
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
        $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
            ]);
            $mahasiswa = new Profil_NIM;
            $mahasiswa->nim = $request->nim;
            $mahasiswa->nama_lengkap = $request->nama;
            $mahasiswa->angkatan = $request->angkatan;
            $mahasiswa->email = $request->email;
            $mahasiswa->telp = $request->telp;
            $mahasiswa->save();
            return redirect(route('/store')) ->with('successMsg','New Mahasiswa
            Successfully Added');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_mahasiswa = \App\Profil_NIM::find($id);
    	return view('edit_profil', ['data_mahasiswa' => $data_mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_mahasiswa = \App\Profil_NIM::find($id);
    	$data_mahasiswa->update($request->all());
    	return redirect('/')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $data_mahasiswa = \App\Profil_NIM::find($id);
        $data_mahasiswa->delete();
        return redirect('/')->with('sukses','Project telah dihapus');
    }
}
