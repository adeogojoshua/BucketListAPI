<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\ResponseController as ResponseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\BucketList;
use App\BucketListItem;

use App\Http\Resources\BucketListItem as BucketListItemResource;

class BucketListItemController extends ResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $bucketlist = BucketList::find($id);
        
        if(empty($request->name) || empty($bucketlist) || $bucketlist->created_by !== Auth::user()->id){
            $response['status-code'] = config('status-codes.Forbidden');
        }else{

            $bucketlistitem = new BucketListItem();

            $bucketlistitem['bucket_list_id'] = $id;
            $bucketlistitem['name'] = $request->name;

            if($bucketlistitem->save()){
                $response['status-code'] = config('status-codes.Successful');
            }else{
                $response['status-code'] = config('status-codes.Error');
            }

        }


        return $this->sendResponse($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bucketlist = BucketList::find($id);

        if(empty($bucketlist) || $bucketlist->created_by !== Auth::user()->id){
            $response['status-code'] = config('status-codes.Forbidden');
            return $this->sendResponse($response);
        }else{
            $items = BucketListItem::where('bucket_list_id', $id)->get();
            return BucketListItemResource::collection($items);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $item_id)
    {
        $bucketlist = BucketList::find($id);
        
        if(empty($request->name) || empty($bucketlist) || $bucketlist->created_by !== Auth::user()->id){
            $response['status-code'] = config('status-codes.Forbidden');
        }else{
            
            $bucketlistitem = BucketListItem::where('bucket_list_id', $id)->where('id', $item_id)->first();
            
            if(empty($bucketlistitem)){
                $response['status-code'] = config('status-codes.Forbidden');
            }else{
                    $bucketlistitem['name'] = $request->name;
                    if(isset($request->done)){
                        $bucketlistitem['done'] = $request->done;
                    }
        
                    if($bucketlistitem->save()){
                        $response['status-code'] = config('status-codes.Successful');
                    }else{
                        $response['status-code'] = config('status-codes.Error');
                    }

            }

        }

        return $this->sendResponse($response);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $item_id)
    {
        $bucketlist = BucketList::find($id); 
        
        if(empty($bucketlist) || $bucketlist->created_by !== Auth::user()->id){
            $response['status-code'] = config('status-codes.Forbidden');
        }else{
            
            $bucketlistitem = BucketListItem::where('bucket_list_id', $id)->where('id', $item_id)->first();
            
            if(empty($bucketlistitem)){
                $response['status-code'] = config('status-codes.Forbidden');
            }else{
                if($bucketlistitem->delete()){
                    $response['status-code'] = config('status-codes.Successful');
                }else{
                    $response['status-code'] = config('status-codes.Error');
                }

            }

        }
        
        return $this->sendResponse($response);
    }
}
