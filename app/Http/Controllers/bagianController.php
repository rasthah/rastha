<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SendComplaint;

use App\Blog;
use Illuminate\Support\Facades\Auth;

class BagianController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $blogs = Blog::where('bagian_id', $user->bagian_id)
                ->where('departemen_id', $user->departemen_id)
                ->latest()->paginate(5);
        //$complaints = SendComplaint::latest()->paginate(5);
  
        return view('bagian.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bagian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            
            'penanggung_jawab' => 'required',
            'mengerjakan_keluhan' => 'required',
            'petugas_respon' => 'required',
            'respon' => 'required',
            'tanggal_respon' => 'required',
            'waktu_penanganan' => 'required',
            'tipe_keluhan' => 'required',
        ]);

        $id = $request->blog_id;

        $complaint = Blog::find($id);
  
        $complaint->update($request->except(['blog_id']));

   
        return redirect()->route('bagian.index')
                        ->with('success','Keluhan berhasil dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('bagian.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$complaint = SendComplaint::find($id);
        $blog = Blog::find($id);
        return view('bagian.edit',compact('blog'));
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
        $request->validate([
            'penanggung_jawab' => 'required',
            'mengerjakan_keluhan' => 'required',
            'petugas_respon' => 'required',
            'respon' => 'required',
            'tanggal_respon' => 'required',
            'waktu_penanganan' => 'required',
            'tipe_keluhan' => 'required',
        ]);

        $complaint = Blog::find($id);
  
        $complaint->update($request->all());
  
        return redirect()->route('bagian.index')
                        ->with('success','Keluhan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog->delete();
  
        return redirect()->route('sendcomplaints.index')
                        ->with('success','Blogs deleted successfully');
    }
}
