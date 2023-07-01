@extends('admin.layout.adminbased')

@section('content')
<div class="admin-contents">
    <div class="admin-container">
        {{-- sidebar --}}

        <div class="admin-sidebar">
           @include('admin.utilies.adminsidebar')
        </div>
        {{-- the end --}}

        <div class="admin-rightcontainer">
     @include('admin.utilies.adminhomepage')

    </div>
    </div>
</div>
@endsection
