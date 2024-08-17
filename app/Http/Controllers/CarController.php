<?php

namespace App\Http\Controllers;

// use App\common;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CarController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
  protected string $filesPath = "assets/images/car";
    protected string $model = Car::class;
    protected string $relationModel = Category::class;
    protected string $relations = 'category';

    public function __construct() {
        $this->columns = (new Car())->getFillable();
    }  
    // all views must be in car/
    // index    --> car/index
    // create   --> car/create
    // show     --> car/show
    // edit     --> car/edit

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'carTitle' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'discription' => 'required|string',
            'price' => 'required|decimal:0,2',
        ]);
        $request['published'] = $request->has('published');
        return parent::store($request);
    }

    public function update(Request $request, String $id): RedirectResponse
    {
        $request->validate([
            'carTitle' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'discription' => 'required|string',
            'price' => 'required|decimal:0,2',
        ]);

        $request['published'] = $request->has('published');

        return parent::update($request, $id);
    }
    public function showDeleted(){
        $cars=Car::onlyTrashed()->get();
        return view('trashedCars',compact('cars'));
    }
    public function perminantDelete(Car $car){
        $car->forceDelete();
        return redirect()->route('cars.deleted');

    }
    public function restore(Car $car){
        $car->restore();
        return redirect()->route('cars.deleted');
    }
}
