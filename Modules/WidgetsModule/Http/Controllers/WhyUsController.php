<?php

namespace Modules\WidgetsModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\WhyUsRepository;

class WhyUsController extends Controller
{
    use UploaderHelper;
    private $whyusRepo;

    public function __construct(WhyUsRepository $whyusRepo) {
        $this->whyusRepo = $whyusRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $why_us = $this->whyusRepo->findAll();

        return view('widgetsmodule::why_us.index', ['why_us' => $why_us]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::why_us.create');
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
            $imageName = $this->upload($image, 'why_us');
            $page_data['photo'] = $imageName;
        }

        $this->whyusRepo->save($page_data);
        return redirect('admin-panel/widgets/why_us/')->with('success', 'success');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $page = $this->whyusRepo->find($id);

        return view('widgetsmodule::page.show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $page = $this->whyusRepo->find($id);

        return view('widgetsmodule::why_us.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $pagePic = $this->whyusRepo->find($id);
        $page = $request->except('_method', '_token', 'photo', 'ar', 'en');
        $pageTrans = $request->only('ar', 'en');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/why_us/' . $pagePic->photo;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'why_us');
            $page['photo'] = $imageName;
        }

        $this->whyusRepo->update($id, $page, $pageTrans);

        return redirect('admin-panel/widgets/why_us')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $page = $this->whyusRepo->find($id);

        $this->whyusRepo->delete($page);

        return redirect()->back();
    }
}
