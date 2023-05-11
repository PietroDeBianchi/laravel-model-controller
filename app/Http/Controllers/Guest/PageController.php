<?php
// take the Class name and his Path
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // push the return to from web.php
        return view('home');
    }
}
