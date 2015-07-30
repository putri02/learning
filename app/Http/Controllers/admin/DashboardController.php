<?php
/**
 * Created by PhpStorm.
 * User: ORIGINAL
 * Date: 2015-07-28
 * Time: 19:59
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
   /* tampilkan controller
   public function index()
    {
      return 'Controller';
    }

   protected $string = 'ini overide strong';

    public function index()
    {
        return $this->getAction();
    } */

    public function index(Request  $request)
    {
        $fname = $request->get('fname');
        $lname = $request->get('lname');
        $only_f_name = $request->only('fname');

        return $only_f_name;

    }
}