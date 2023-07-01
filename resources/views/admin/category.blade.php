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
            <div class="admin-content-holder">
                @include('admin.utilies.admintopnav')
           <div class="formdivs">
            <form action="{{ route("postcategory") }}" method="post">
                @csrf
                <input name="name" type="text" placeholder="category name">
                <button>Create</button>
            </form>
           </div>
<div class="category-content">
   @forelse ($cat as $item)
   <div class="categorydata">
    <div class="categoryname">
        <h1>{{ $item->name }}</h1>
    </div>
    <div class="categiryupdate">
        <a href=""><i class="fa-solid fa-pen"></i></a>
    </div>
    <div class="categiryupdate">
        <a href="deletcat/{{ $item->id }}"><i class="fa-regular fa-trash-can"></i></a>
    </div>
</div>

   @empty

   @endforelse

    {{-- <div class="categorydata">
        <div class="categoryname">
            <h1>Breaking</h1>
        </div>
        <div class="categiryupdate">
            <a href=""><i class="fa-solid fa-pen"></i></a>
        </div>
        <div class="categiryupdate">
            <a href=""><i class="fa-regular fa-trash-can"></i></a>
        </div>
    </div> --}}
</div>
    </div>
    </div>
    </div>
</div>
@endsection
