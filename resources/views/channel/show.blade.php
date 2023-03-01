@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$channel->name}}</div>

                <div class="card-body">

                    {{-- form --}}
                   <form action="{{ route('update-channel' , $channel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row justify-content-center">
                        <div class="channel-avatar">
                            {{-- hover style --}}
                            <div class="channel-avatar-overlay" onclick="document.getElementByID('image').click()">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16"> <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/> <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/> </svg>

                            </div>
                        </div>
                    </div>

                    {{-- profile image --}}
                    <input style="display: none" type="file" name="image" id="image">

                    <div class="form-group">
                        <label for="name" class="form-control-label">Name</label>
                        <input type="text" id="name" name="name" value="{{$channel->name}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$channel->description}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-info mt-3" style="">Update Channel</button>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
