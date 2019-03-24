<?php

namespace Modules\WidgetsModule\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\UploaderHelper;
use Modules\WidgetsModule\Repository\TeamRepository;

class TeamController extends Controller
{
    use UploaderHelper;

    private $teamRepo;

    public function __construct(TeamRepository $teamRepo)
    {
        $this->teamRepo = $teamRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $teams = $this->teamRepo->findAll();

        return view('widgetsmodule::Team.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::Team.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $teamData = $request->except('_token', 'photo');
        $teamData['created_by'] = auth()->user()->id;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'team');
            $teamData['photo'] = $imageName;
        }

        $this->teamRepo->save($teamData);

        return redirect('admin-panel/widgets/team')->with('success', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $team = $this->teamRepo->find($id);

        return view('widgetsmodule::Team.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $teamPic = $this->teamRepo->find($id);
        $team = $request->except('_method', '_token', 'photo', 'ar', 'en');
        $teamTrans = $request->only('ar', 'en');

        if ($request->hasFile('photo')) {
            // Delete old image first.
            $oldPic = public_path() . '/images/team/' . $teamPic->photo;
            File::delete($oldPic);

            // Save the new one.
            $image = $request->file('photo');
            $imageName = $this->upload($image, 'team');
            $team['photo'] = $imageName;
        }

        $this->teamRepo->update($id, $team, $teamTrans);

        return redirect('admin-panel/widgets/team')->with('updated', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $team = $this->teamRepo->find($id);
        $this->teamRepo->delete($team);

        return redirect()->back();
    }
}
