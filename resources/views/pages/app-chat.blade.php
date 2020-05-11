@extends('layouts/app')
@extends('layouts/contentLayoutMaster')


@section('title', 'Chat')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-chat.css')) }}">
@endsection
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="user-wrapper">
          <ul class="users">
            @if(Auth::user()->type == "Admin")
            @foreach($users as $user)
            <li class="user" id="{{ $user->id }}">
              @if($user->unread)
                <span class="pending">{{ $user->unread }}</span>
              @endif
              <div class="media">
                <div class="media-left">
                  <img src="../avatars/{{ $user->avatar }}" alt="" class="media-object">
                </div>
                <div class="media-body">
                  <p class="name">{{ $user->name }}</p>
                  <p class="email">{{ $user->email }}</p>
                </div>
              </div>
            </li>
            @endforeach
            @else
            
            @foreach($users as $user)
            
            <li class="user" id="1">
              @if($user->unread)
                <span class="pending">{{ $user->unread }}</span>
              @endif
              <div class="media">
                <div class="media-left">
                  <img src="../avatars/yug.jpg" alt="" class="media-object">
                </div>
                <div class="media-body">
                  <p class="name">Yug Soni</p>
                  <p class="email">yug.spider@gmail.com</p>
                </div>
              </div>
            </li>
            
            @endforeach
            @endif
          </ul>
        </div>
      </div>
      <div class="col-md-8" id="messages">
            <div class="message-wrapper-r">
    <ul class="messages">
      
        
            <li class="message clearfix">
                {{--if message from id is equal to auth id then it is sent by logged in user --}}
                <div class="main">
                  Chat 
                </div>
                <div class="main-hive">
                  If you have any query or any doubt related to this site or theme you can ask here. The answer will come from Admin directly. 
                </div>
            </li>
        
    </ul>
</div>

            
          </div>
    </div>
  </div>
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/app-chat.js')) }}"></script>
@endsection

