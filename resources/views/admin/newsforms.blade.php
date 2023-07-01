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
           <div class="formnewsdivs">
            <form action="{{ route("postnews") }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="news headline" name="headeline">
               <select name="cat_id" >
                <option selected >Category</option>
                @forelse ($cat as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @empty

                @endforelse
               </select>
               <textarea name="description" cols="30" rows="10" placeholder="news description"></textarea>

               {{-- <label for="file">upload</label> --}}

               <input class="imageurl imageurlhide" type="text" placeholder="image URL" name="imagelink">
               <input class="imagefile" name="image" type="file" id="file">
               <button type="button" onclick="change()">Use Image Link</button>
                <button class="postbtn">Post</button>
            </form>

           </div>
           <style>
            #change-image{
                cursor: pointer;
            }
            .hideimagefile{
                display: none;
            }
            .imageurlhide{
                display: none
            }
            .showimageurl{
                display: block !important;
            }

        </style>
    </div>
    </div>
    </div>
</div>
@endsection
