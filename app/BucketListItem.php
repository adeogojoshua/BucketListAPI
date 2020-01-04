<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BucketListItem extends Model
{
    //
    protected $table = 'bucketlistitems';
    

    public function bucketlist()
    {
        return $this->belongsTo('App\BucketList');
    }
}
