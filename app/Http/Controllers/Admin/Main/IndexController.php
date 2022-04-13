<?php
namespace App\Http\Controllers\Admin\Main;

use Illuminate\Routing\Controller;
use function view;

class IndexController extends Controller
{
 public function index()
 {
     return view('admin.main.index');
 }
}
