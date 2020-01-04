<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BucketList extends Model
{
    //
    protected $table = 'bucketlists';

    public function bucketlistitems()
    {
        return $this->hasMany('App\BucketListItem');
    }
}
