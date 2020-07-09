@extends('layouts.front')
<div class="container">
  <div class="row">
    <h1> プロフィール一覧</h1>
  </div>
</div>

@section('content') 
  <div class="container">
    <hr color="#c0c0c0">
    <div class="row">
      <div class="profiles col-md-8 mx-auto mt-3">
        @foreach($profiles as $profile)
          <div class="profile">
            <div class="row">
              <div class="text col-md-6">
                <div class="date">
                  {{ $profile->updated_at->format('作成日: Y年m月d日') }}
                </div>
                <div class="name">
                  {{ "名前:" . str_limit($profile->name, 30) }}
                </div>
                <div class="gender">
                  {{ "性別:" . str_limit($profile->gender, 10) }}
                </div>
                <div class="hobby">
                  {{ "趣味:" . str_limit($profile->hobby, 1500) }}
                </div>
              </div>
            </div>
          </div>
          <hr color="#c0c0c0">
        @endforeach
      </div>
    </div>
  </div>
  </div>
@endsection
