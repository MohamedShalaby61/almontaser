<?php

namespace Modules\WidgetsModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\TestimonialRepository;

class TestimonialController extends Controller
{

    use UploaderHelper;

    private $monialRepo;

    public function __construct(TestimonialRepository $monialRepo)
    {
        $this->monialRepo = $monialRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $monial = $this->monialRepo->findAll();
        return view('widgetsmodule::Testimonial.index', ['testimonial' => $monial]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::Testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $monialData = $request->except('_token', 'photo');
        $monialData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'testimonials');
            $monialData['photo'] = $imageName;
        }

        $this->monialRepo->save($monialData);

        return redirect('admin-panel/widgets/testimonials/')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $monial = $this->monialRepo->find($id);
        return view('widgetsmodule::Testimonial.edit', ['monial' => $monial]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $monialPic = $this->monialRepo->find($id);
        $monial = $request->except('_method', '_token', 'photo');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/testimonials/' . $monialPic->photo;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'testimonials');
            $monial['photo'] = $imageName;
        }

        $this->monialRepo->update($id, $monial);

        return redirect('admin-panel/widgets/testimonials')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $monial = $this->monialRepo->find($id);
        $this->monialRepo->delete($monial);

        return redirect()->back();
    }
}
