<?php

namespace Modules\WidgetsModule\Repository;

use Modules\WidgetsModule\Entities\Booking;


class BookingRepository
{

    public function find($id)
    {
        $booking = Booking::where('id', $id)->first();

        return $booking;
    }

    public function findAll()
    {
        $bookings = Booking::all();

        return $bookings;
    }

    public function store($data)
    {
        return Booking::create($data);
    }

    public function update($id, $data)
    {
        $booking = self::find($id);
        return $booking->update($data);
    }

    public function delete($booking)
    {
        return Booking::destroy($booking->id);
    }
}
