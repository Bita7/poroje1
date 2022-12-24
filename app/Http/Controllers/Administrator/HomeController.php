<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home =Home::all();
        return view('admin.home.index' ,compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $image="";
        if(!empty($file)){
            $image=time().".".$file->getClientOriginalExtension();
            $file->move('admin/images/home',$image);
        }
        Home::create([
            'image'=>$image,
            'title'=>$request->title,
            'price'=>$request->price

        ]);
        return redirect()->route('home.store');
    
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
        $home = Home::findOrFail($id);
        return view('admin.home.edit',compact('home'));
    }

   
    public function update(Request $request, $id)
    {
        $home=Home::findOrFail($id);
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            if(file_exists('admin/images/home'.$home->image)){
                unlink('admin/images/home/'.$home->image);
            }
            $image=time().".".$file->getClientOriginalExtension();
            $file->move('admin/images/home',$image);
        }else{
            $image=$home->image;
        }
        $home->update([
            'image'=>$image,
            'title'=>$request->title,
            'price'=>$request->price,
        ]);
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home=Home::findOrFail($id);

        if(!empty($file)){
            if(file_exists('admin/images/home'.$home->image)){
                unlink('admin/images/home/'.$home->image);
            }
        }
        $home->destroy($id);
        return redirect()->route('home.index');

    }
}