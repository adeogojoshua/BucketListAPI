<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\BucketList;
use App\BucketListItem;

use App\Http\Resources\BucketList as BucketListResource;



class BucketListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 dd(auth()->user());
        $bucketlists = Bucketlist::orderBy('id', 'DESC')->where('id', Auth::user()->id)->paginate(2);

        return BucketListResource::collection($bucketlists);
    }

    public function show($id){
        return $id;
    }
}
