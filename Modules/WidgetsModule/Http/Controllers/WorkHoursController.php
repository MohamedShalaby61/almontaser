<?php

namespace Modules\WidgetsModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\WidgetsModule\Repository\WorkHoursRepository;

class WorkHoursController extends Controller
{
    private $hoursRepo;

    public function __construct(WorkHoursRepository $hoursRepo) {
        $this->hoursRepo = $hoursRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $hours = $this->hoursRepo->findAll();

        return view('widgetsmodule::workhours.index', ['hours' => $hours]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::workhours.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $this->hoursRepo->save($data);

        return redirect('admin-panel/widgets/hours')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $hour = $this->hoursRepo->find($id);

        return view('widgetsmodule::workhours.edit', ['hour' => $hour]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $hour = $request->except(['_token', '_method']);
        $this->hoursRepo->update($hour, $id);

        return redirect('admin-panel/widgets/hours')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $this->hoursRepo->delete($id);
        return redirect()->back();
    }
}
