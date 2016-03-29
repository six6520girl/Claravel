<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  /**
   * find car of id by one
   * @param int $id
   * @return array
   */
    public static function find($id)
    {
      // $result = DB::select('select * from cars where id = :id',['id' => $id]);
      $result = DB::table('cars')->where('id', $id)->first();
      // return json_encode($result);
      return $result;
    }

    /**
     * insert a car
     * @param array $carArray
     * @return boolean
     */
    public function insert($carArray)
    {
      $id = DB::table('cars')->insertGetId(
          [
            'make' => $carArray['make'],
            'model' => $carArray['model'],
            'produced_on' => $carArray['produced_on'],
            'created_at' => $carArray['created_at']
          ]
      );
    }
}
