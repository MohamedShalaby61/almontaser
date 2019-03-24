<?php

namespace Modules\WidgetsModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\PartnerRepository;

class PartnersController extends Controller
{

    use UploaderHelper;

    private $partnerRepo;

    public function __construct(PartnerRepository $partnerRepo)
    {
        $this->partnerRepo = $partnerRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $partners = $this->partnerRepo->findAll();
        return view('widgetsmodule::Partner.index', ['partners' => $partners]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::Partner.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $partnerData = $request->except('_token', 'photo');
        $partnerData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'partners');
            $partnerData['photo'] = $imageName;
        }

        $this->partnerRepo->save($partnerData);

        return redirect('admin-panel/widgets/partners/')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $partner = $this->partnerRepo->find($id);

        return view('widgetsmodule::Partner.edit', ['partner' => $partner]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $partnerPic = $this->partnerRepo->find($id);
        $partner = $request->except('_method', '_token', 'photo');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/partners/' . $partnerPic->photo;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'partners');
            $partner['photo'] = $imageName;
        }

        $this->partnerRepo->update($id, $partner);

        return redirect('admin-panel/widgets/partners')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $partner = $this->partnerRepo->find($id);
        $this->partnerRepo->delete($partner);

        return redirect()->back();
    }
}
