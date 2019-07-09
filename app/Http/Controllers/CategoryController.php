<?php

namespace App\Http\Controllers;
use App\category;
use App\service;
use App\Http\Resources\CategoryResource;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      return CategoryResource::collection(Category::with('Services')->paginate(25));
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);

}
}