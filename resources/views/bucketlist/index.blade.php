@extends('layouts.custom')

@section('content')
<div class="section">
    <br/><br/>
    <div>
        <div class="container">
                <div class="title-area">
                <h5 class="subtitle text-gray">{{ Auth::user()->username }}</h5>
                    <h2>Your BucketList</h2>
                    <div class="separator separator-danger">✻</div>
                    <button type="button" class="btn btn-success btn-fill" data-toggle="modal" data-target="#bucketlistModal">
                        Add BucketList
                    </button>

                </div>

                <!-- Modal -->
                {{-- @include('bucketlist.modal') --}}

                <bucketlist-component></bucketlist-component>

        </div>
    </div>
</div>
@endsection
