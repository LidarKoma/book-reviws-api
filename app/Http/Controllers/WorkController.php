<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Http\Resources\WorkResource;

class WorkController extends Controller
{
    public function index()
    {
    return WorkResource::collection(Work::with('workdetial')->paginate(25));
    }
    public function show(Work $work)
    {
      return new WorkResource($work);
    }
}
