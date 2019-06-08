<?php

namespace Modules\PhotoAlbumModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PhotoAlbumModule\Repository\PhotoCategRepo;

class PhotoCategController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */

    private $photocateg;

    public function __construct(PhotoCategRepo $photocategrepo){
        $this->photocateg =$photocategrepo;
    }
    public function index()
    {

        $categories=$this->photocateg->findAll();
        return view('photoalbummodule::photocateg.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('photoalbummodule::photocateg.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $categories = $request->except('_token');

        $this->photocateg->save($categories);

        return redirect('admin-panel/photos/photocategory')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('photoalbummodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
       $category= $this->photocateg->find($id);
        return view('photoalbummodule::photocateg.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $category= $request->except('_method', '_token');
        $this->photocateg->update($id,$category);
        return redirect('admin-panel/photos/photocategory')->with('updated' , 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $this->photocateg->delete($id);
        return redirect('admin-panel/photos/photocategory');
    }
}
