<?php

namespace Modules\WidgetsModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\SliderRepository;

class SlidersController extends Controller
{

    use UploaderHelper;
    private $sliderRepo;

    public function __construct(SliderRepository $sliderRepo)
    {
        $this->sliderRepo = $sliderRepo;
    }
 
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $sliders = $this->sliderRepo->findAll();

        return view('widgetsmodule::Slider.index', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::Slider.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $sliderData = $request->except('_token', 'photo');
        $sliderData['created_by'] = auth()->user()->id;

        if($request->hasFile('photo'))
        {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'sliders');
            $sliderData['photo'] = $imageName;
        }

        $this->sliderRepo->save($sliderData);

        return redirect('admin-panel/widgets/slider/')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $slider = $this->sliderRepo->find($id);

        return view('widgetsmodule::Slider.edit', ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {/* dd($request->all()); */
        $sliderPic = $this->sliderRepo->find($id);
        $slider = $request->except('_method', '_token', 'photo', 'ar', 'en');
        $sliderTrans = $request->only('ar', 'en');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/sliders/' . $sliderPic->photo;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'sliders');
            $slider['photo'] = $imageName;
        }

        $this->sliderRepo->update($id, $slider, $sliderTrans);

        return redirect('admin-panel/widgets/slider')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
       $slider = $this->sliderRepo->find($id);
       $this->sliderRepo->delete($slider);

       return redirect()->back();
    }
}
