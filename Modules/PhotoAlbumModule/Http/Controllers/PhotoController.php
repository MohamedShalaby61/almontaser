<?php

namespace Modules\PhotoAlbumModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\PhotoAlbumModule\Entities\Photo;
use Modules\PhotoAlbumModule\Http\Requests\PhotoRequest;
use Modules\PhotoAlbumModule\Repository\PhotoCategRepo;
use Modules\PhotoAlbumModule\Repository\PhotoRepo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    use UploaderHelper;
    private $photorepo;
    private $photocategrepo;
    public function __construct(PhotoRepo $photorepo ,PhotoCategRepo $photocategrepo){
        $this->photorepository = $photorepo;
        $this->photocateg =$photocategrepo;

    }

    public function index()
    {
        $photos= $this->photorepository->findAll();

        return view('photoalbummodule::photo.index',['photos'=>$photos]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories=$this->photocateg->findAll();
        return view('photoalbummodule::photo.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(PhotoRequest $request)
    {
        $photos = $request->except('_token');

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'photo');
            $photos['photo'] = $imageName;
        }

        $this->photorepository->save($photos);

        return redirect('admin-panel/photos/photo')->with('success', 'success');
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
        $categories=$this->photocateg->findAll();
        $photo= $this->photorepository->find($id);
        $photos= $this->photorepository->findAll();
        return view('photoalbummodule::photo.edit',['photo'=>$photo ,'photos'=>$photos ,"categories"=>$categories]);

    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(PhotoRequest $request,$id)
    {

        $photo= $request->except('_method', '_token');

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'photo');
            $photo['photo'] = $imageName;
        }
        $this->photorepository->update($id,$photo);
        return redirect('admin-panel/photos/photo')->with('updated' , 'updated');
    }



    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $this->photorepository->delete($id);
        return redirect('admin-panel/photos/photo');
    }
}
