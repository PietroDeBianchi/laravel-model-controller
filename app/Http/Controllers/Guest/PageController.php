<?php
// take the Class name and his Path
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // take all the movies from db_movies in App/Models/Movie
        $movies = Movie::all();
        // push the return to from web.php
        return view('home', compact('movies'));
    }

    public function movie()
    {
        // push the return to from web.php
        return view('movies');
    }

    public function series()
    {
        // push the return to from web.php
        return view('series');
    }
}
