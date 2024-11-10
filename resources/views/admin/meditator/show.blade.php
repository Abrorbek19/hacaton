@extends('admin.layouts.app')
@section('admin_content')
<div class="dashboard__content bg-light-4">
  <div class="row pb-50 mb-10">
    <div class="col-auto">
      <h1 class="text-30 lh-12 fw-700">Meditator</h1>
      <div class="mt-10">Lorem ipsum dolor sit amet, consectetur.</div>
    </div>
  </div>
  <div class="row y-gap-30 pt-30">
    <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
      <div class="d-flex justify-between meditators-center py-20 px-30 border-bottom-light">
        <h2 class="text-17 fw-500">{{$meditator->firstname}}</h2>
        <div>
          <div>Avatar</div>
          <div>
            @if ($meditator->avatar)
              <form action="{{route('admin.meditator-unupload', ['meditator' => $meditator->id, 'asset' => $meditator->avatar->id])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
              </form>
            @endif
          </div>
            @if ($meditator->avatar)
              <img src="{{asset($meditator->avatar->path)}}" alt="ALt">
            @endif
          </div>
        </div>
        <div>
          <div>Image</div>
          <div>
            @if ($meditator->image)
              <form action="{{route('admin.meditator-unupload', ['meditator' => $meditator->id, 'asset' => $meditator->image->id])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
              </form>
            @endif
          </div>
            @if ($meditator->image)
              <img src="{{asset($meditator->image->path)}}" alt="ALt">
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection