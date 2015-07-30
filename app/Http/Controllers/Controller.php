<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Show the form the create a new blog post.
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a new blog post.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate and store the blog post...
    }
}
/*abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $string = 'string';

    private $strong = 'strong';

    public $streng = 'streng';

    public function getAction()
    {
        return 'ini action';
    }

} */
