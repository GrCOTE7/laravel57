<?php
namespace App\Http\Controllers;

use App\Repositories\ {
  ImageRepository, CategoryRepository
};
use Illuminate\Http\Request;

class ImageController extends Controller
{
 protected $repository, $categoryRepository;

 public function __construct(
  ImageRepository $imageRepository,
  CategoryRepository $categoryRepository)
{
  {
    $this->imageRepository = $imageRepository;
    $this->categoryRepository = $categoryRepository;
  }
}

public function category($slug)
{
    $category = $this->categoryRepository->getBySlug ($slug);
    $images = $this->imageRepository->getImagesForCategory ($slug);
    return view ('home', compact ('category', 'images'));
}

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('images.create');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
  $request->validate([
   'image'       => 'required|image|max:2000',
   'category_id' => 'required|exists:categories,id',
   'description' => 'nullable|string|max:255',
  ]);
  $this->repository->store($request);
  return back()->with('ok', __("L'image a bien été enregistrée"));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
 {
  //
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy($id)
 {
  //
 }
}