<?php

namespace Modules\WidgetsModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\PageRepository;

class PageController extends Controller
{
    use UploaderHelper;
    private $pageRepo;

    public function __construct(PageRepository $pageRepo) {
        $this->pageRepo = $pageRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $pages = $this->pageRepo->findAll();

        return view('widgetsmodule::page.index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::page.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $page_data = $request->except(['_token', 'photo']);
        $page_data['created_by'] = auth()->user()->id;

        if($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'pages');
            $page_data['photo'] = $imageName;
        }

        $this->pageRepo->save($page_data);
        return redirect('admin-panel/widgets/page/')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $page = $this->pageRepo->find($id);

        return view('widgetsmodule::page.show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $page = $this->pageRepo->find($id);

        return view('widgetsmodule::page.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $pagePic = $this->pageRepo->find($id);
        $page = $request->except('_method', '_token', 'photo', 'ar', 'en');
        $pageTrans = $request->only('ar', 'en');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/pages/' . $pagePic->photo;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'pages');
            $page['photo'] = $imageName;
        }

        $this->pageRepo->update($id, $page, $pageTrans);

        return redirect('admin-panel/widgets/page')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $page = $this->pageRepo->find($id);

        $this->pageRepo->delete($page);

        return redirect()->back();
    }
}
