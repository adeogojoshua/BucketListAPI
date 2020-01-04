<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\ResponseController as ResponseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\BucketList;
use App\BucketListItem;

use App\Http\Resources\BucketList as BucketListResource;



class BucketListController extends ResponseController
{

    public $successStatus = 200;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        // $this->middleware('client');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); 
        $bucketlists = BucketList::with('bucketlistitems:bucket_list_id,id,name,created_at,updated_at,done')->orderBy('id', 'DESC')->where('created_by', $user->id)->paginate(2);
        $bucketlistresource =  BucketListResource::collection($bucketlists);
        // return response()->json(['success' => $user, 'data' => $bucketlistresource], $this-> successStatus); 
        return BucketListResource::collection($bucketlists);


    }

    //fetch single bucketlist
    public function show($id){
        $bucketlist = BucketList::with('bucketlistitems:bucket_list_id,id,name,created_at,updated_at,done')->find($id);
        if(empty($bucketlist) || $bucketlist->created_by !== Auth::user()->id){
            $response['status-code'] = config('status-codes.Forbidden');
        }else{
            $response['status-code'] = config('status-codes.Successful');
            $response['data'] = $bucketlist;
        }
        return response()->json($response);
    }

    // New BucketList
    public function store(Request $request){
        $bucketlist = new BucketList();
        $bucketlist->name = ucwords(trim($request->name));
        $bucketlist->created_by = Auth::user()->id;
        
        if(empty($request->name)){
            $response['status-code'] = config('status-codes.Forbidden');
        }else{
            if($bucketlist->save()){
                $response['status-code'] = config('status-codes.Successful');
            }else{
                $response['status-code'] = config('status-codes.Error');
            }

        }

        return $this->sendResponse($response);
    }

    // Update Bucketlist
    public function update(Request $request, $id){
        $bucketlist = BucketList::find($id);
        
        if(empty($request->name) || empty($bucketlist) || $bucketlist->created_by !== Auth::user()->id){
            $response['status-code'] = config('status-codes.Forbidden');
        }else{
            $bucketlist->name = ucwords(trim($request->name));
            
            if($bucketlist->save()){
                $response['status-code'] = config('status-codes.Successful');
            }else{
                $response['status-code'] = config('status-codes.Error');
            }
        }

        return $this->sendResponse($response);
    }

    // Update Bucketlist and items
    public function delete($id){
        $bucketlist = BucketList::find($id);
        
        if(empty($bucketlist) || $bucketlist->created_by !== Auth::user()->id){
            $response['status-code'] = config('status-codes.Forbidden');
        }else{
            if($bucketlist->delete()){
                BucketListItem::where('bucket_list_id', $id)->delete();
                $response['status-code'] = config('status-codes.Successful');
            }else{
                $response['status-code'] = config('status-codes.Error');
            }
        }

        return $this->sendResponse($response);
    }

}
