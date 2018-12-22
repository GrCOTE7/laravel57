<?php
namespace App\Http\Controllers;

use App\Repositories\ImageRepository;

class AdminController extends Controller
{
    protected $repository;
    public function __construct(ImageRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('ajax')->only('destroy');
    }
    public function orphans()
    {
        $orphans        = $this->repository->getOrphans();
        $orphans->count = count($orphans);
        return view('maintenance.orphans', compact('orphans'));
    }
    public function destroy()
    {
        $this->repository->destroyOrphans();
        return response()->json();
    }
}
