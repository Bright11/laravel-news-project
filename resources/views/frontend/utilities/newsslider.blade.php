<section class="section-slider">
    <!-- Set up your HTML -->
<div class="owl-carousel newssliderowl">
@forelse ($news as $item)
<div>
    <a href="">
   @if ($item->image)
   <img  src="{{Storage::url($item->image)}}" alt="">
   @elseif ($item->imagelink)
   <img src="{{ $item->imagelink }}" alt="">
   @endif
   <p>{{ Str::limit($item->headeline, 30) }}</p>
    </a>
    </div>
@empty

@endforelse
{{-- <div>
<a href="">
    <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/2286/production/_129783880_russian_defenses_promo_976-nc.png.webp" alt="">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sunt vel ducimus minus dolores vitae ipsum ex temporibus labore reiciendis quae ut, corporis quam, architecto voluptate accusamus quisquam mollitia voluptas!</p>
 </a>
</div>
<div>
<a href="">
    <img src="https://cdn.vanguardngr.com/wp-content/uploads/2023/05/A901B0B8-1395-45C2-8C7D-9816C85E31BD.jpeg?auto_optimize=low&width=350" alt="">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sunt vel ducimus minus dolores vitae ipsum ex temporibus labore reiciendis quae ut, corporis quam, architecto voluptate accusamus quisquam mollitia voluptas!</p>
 </a>
</div>
<div>
<a href="">
    <img src="https://cdn.vanguardngr.com/wp-content/uploads/2023/05/A901B0B8-1395-45C2-8C7D-9816C85E31BD.jpeg?auto_optimize=low&width=350" alt="">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sunt vel ducimus minus dolores vitae ipsum ex temporibus labore reiciendis quae ut, corporis quam, architecto voluptate accusamus quisquam mollitia voluptas!</p>
 </a>
</div> --}}
<!-- <div> Your Content </div>
<div> Your Content </div>
<div> Your Content </div>
<div> Your Content </div>
<div> Your Content </div>
<div> Your Content </div> -->
</div>
</section>
<section class="category-section">
    <ul>
        <li>
            <a href="">World news</a>
        </li>
        <li>
            <a href="">Sports news</a>
        </li>
        <li>
            <a href="">Politice</a>
        </li>
        <li>
            <a href="">Entertainment</a>
        </li>
    </ul>
</section>
