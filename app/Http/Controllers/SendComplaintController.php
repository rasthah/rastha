<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SendComplaint;

use App\Blog;

class SendComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        //$complaints = SendComplaint::latest()->paginate(5);
  
        return view('sendcomplaints.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sendcomplaints.create');
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
            
            'petugas_id' => 'required',
            'departemen_id' => 'required',
            'tanggal' => 'required',
            'bagian_id' => 'required',
        ]);

        $id = $request->blog_id;

        $complaint = Blog::find($id);
  
        $complaint->update($request->except(['blog_id']));

   
        return redirect()->route('sendcomplaints.index')
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
        return view('sendcomplaints.show',compact('blog'));
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
        return view('sendcomplaints.edit',compact('blog'));
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
            'petugas_id' => 'required',
            'departemen_id' => 'required',
            'tanggal_kirim' => 'required',
            'bagian_id' => 'required',
        ]);

        $complaint = Blog::find($id);
  
        $complaint->update($request->all());
  
        return redirect()->route('sendcomplaints.index')
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
