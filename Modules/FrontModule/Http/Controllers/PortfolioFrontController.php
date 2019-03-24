<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\PortfolioModule\Repository\PortfolioRepository;

class PortfolioFrontController extends Controller
{
    private $portfolioRepo;

    public function __construct(PortfolioRepository $portfolioRepo) {
        $this->portfolioRepo = $portfolioRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexPortfolioCategory()
    {
        return view('frontmodule::index');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexPortfolio()
    {
        return view('frontmodule::create');
    }

    /**
     * Display a listing of projects by category_id.
     * @param Request $request
     * @return Response
     */
    public function indexPortfolioByCategory($category_id)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function showPortfolio($id)
    {
        return view('frontmodule::show');
    }
}
