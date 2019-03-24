<?php

namespace Modules\WidgetsModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\WidgetsModule\Repository\BookingRepository;
use Yajra\DataTables\DataTables;

class BookingController extends Controller
{
    private $bookingRepo;

    public function __construct(BookingRepository $bookingRepo) {
        $this->bookingRepo = $bookingRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $bookings = $this->bookingRepo->findAll();

        return view('widgetsmodule::booking.index', ['bookings' => $bookings]);
    }

    public function dataTables()
    {
        $bookings = $this->bookingRepo->findAll();

        return DataTables::of($bookings)
            ->addColumn('name', function($row) {
                return  $row->name;
            })
            ->addColumn('phone', function($row) {
                return  $row->phone;
            })
            ->addColumn('date', function($row) {
                return  $row->date;
            })
            ->addColumn('message', function($row) {
                return substr($row->message, 0, 25) . '...';
            })
            ->addColumn('operations', function($row) {
                $delete_tag='<a href="'. url('admin-panel/widgets/booking/delete', $row->id) .'" class="btn btn btn-danger" onclick="return confirm(\'Are you sure, You want to delete this Data?\')"><i class="glyphicon glyphicon-trash"></i></a>';
                $show_tag='<a href="'. url("admin-panel/widgets/booking/".$row->id) .'" type="button" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                return $show_tag.' '.$delete_tag;
            })

            ->rawColumns(['operations' => 'operations'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('widgetsmodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $booking = $this->bookingRepo->find($id);

        return view('widgetsmodule::booking.show', ['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('widgetsmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepo->find($id);
        $this->bookingRepo->delete($booking);

        return back();
    }
}
