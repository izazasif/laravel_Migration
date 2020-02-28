@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
           <img src=""/>
        </div>
        <div class="col-9 p-5">
           <div>
           <h1>Test USername</h1>
           <a href="/p/create">New Post</a>
           </div>
           <div class ="d-flex">
           <div class="pr-4"><strong>{{$user->posts->count()}}</strong>Posts</div>
           <div class="pr-4"><strong>23</strong>Followers</div>
           <div class="pr-4"><strong>212</strong>hsfvbh</div>
           </div>
           <div >{{ $user->profile->title}} </div>
           <div >{{ $user->profile->description}} </div>
        </div>
    </div>
    <div class="row">
      @foreach($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="/p/{{ $post->id}}">
        <img src="/storage/{{ $post->image }}" class="w-100">
        </a>
        </div>
        <div class="col-4">
        <h1>{{$user->caption}}</h1>
        </div>
        @endforeach
    </div>
</div>
@endsection
