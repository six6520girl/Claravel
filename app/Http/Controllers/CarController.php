<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;

class CarController extends Controller
{
    /**
     * display a listing of the resource
     * @return response
     */
    public function index()
    {
      return view('car.index');
    }

    /**
     *show the form for creating a new resource
     *@return response
     */
    public function create()
    {
      return view('car.create');
    }

    /**
     * store a newly created resource in storage
     * @return response
     */
    public function store()
    {
      return view('car.store');
    }

    /**
     * display the specified resource
     * @param int &id
     * @return response
     */
    public function show($id)
    {
      $car = Car::find($id);
      return view('car.show',array('car' => $car));
    }

    /**
     *show the form for editing the specified resource
     * @param int $id
     * @return response
     */
    public function edit($id)
    {
      $car = Car::find($id);
      return view('car.edit',array('car' => $car));
    }
    /**
     *update the specified resource in storage
     *@param int $id
     *@return response
     */
    public function update($id)
    {
      $car = Car::find($id);
      return view('car.update',array('car' => $car));
    }

    /**
     * remove the specified resource from storage
     * @param int $id
     * @return response
     */
    public function destroy($id)
    {
      $car = Car::find($id);
      return view('car.destroy',array('car' => $car));
    }
}
