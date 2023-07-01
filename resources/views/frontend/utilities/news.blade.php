
<!--
      </section> -->
      <section class="marqeeslide">
        <button class="breakingbtn">breaking </button>
        <div class="marquee-container">
            <div class="marquee">
              <span>Text to scroll</span>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi nemo atque, molestiae sunt, perferendis quidem dolore, quis error laborum eius quam cum esse! Maiores fugit accusantium commodi minima iste.</span>
              <span>Text to scroll</span>
              <span>Text to scroll</span>
            </div>
          </div>

    </section>
      <!-- top slider -->
      <section class="slide-container">
     @include('frontend.utilities.newsslider')
      </section>
      <!-- the end -->


      <section class="content-section">

        <div class="container-section">
            <section class="right-section">
            @forelse ($newcat as $c)
                @if(count($c->News)>0)
                <div class="view-all">
                    <button>{{ $c->name }} news</button>
                    <a href="">View all</a>
                </div>

                <div class="right-contianer">
                    @forelse ($c->News as $item)
                    <div class="news-content">
                        <a href="">
                            <div class="news-img">
                               @if($item->image)
                               <img  src="{{Storage::url($item->image)}}" alt="">
                               @elseif ($item->imagelink)
                               <img src="{{ $item->imagelink }}" alt="">
                               @endif
                            </div>
                            <div class="news-reporter">
                                <h1>Chika Nwazuo</h1>
                                <h1>1/ may/2023</h1>
                            </div>
                            <p>{{ Str::limit($item->headeline, 30) }}</p>
                        </a>
                    </div>
                    @empty

                    @endforelse

                </div>
                {{-- here --}}

                {{-- the end --}}
                @endif
            @empty

            @endforelse
            </section>
{{--  --}}
            {{-- all --}}
         {{-- <section class="right-section">
             <div class="view-all">
                 <button>Health awareness</button>
                 <a href="">View all</a>
             </div>
             <div class="right-contianer">


             <div class="news-content">
                 <a href="">
                     <div class="news-img">
                         <img src="https://cdn.vanguardngr.com/wp-content/uploads/2023/05/20230521_201307.jpg?auto_optimize=low&width=350" alt="">
                     </div>
                     <div class="news-reporter">
                         <h1>Chika Nwazuo</h1>
                         <h1>1/ may/2023</h1>
                     </div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores placeat doloribus nobis sapiente, nam sed nulla aliquam. Officia sed, ratione, eius quam facilis dolores distinctio quia cupiditate perferendis doloribus assumenda.</p>
                 </a>
             </div>

         </div>

         </section> --}}

{{-- here --}}

 <!--  -->
         <section class="left-section">
         <div class="siderbar">
             <form action="">
                 <input type="text" placeholder="search for news">
                 <button><i class="fa-solid fa-magnifying-glass"></i></button>
             </form>
             <div class="sidebar-content">
                 <h1>Letest News</h1>
                 @forelse ($randomData as $r)
                 <div class="letset-sidebar">
                    <a href="">
                        <div class="sideberletstbox">
                            @if($r->image)
                               <img  src="{{Storage::url($r->image)}}" alt="">
                               @elseif ($r->imagelink)
                               <img src="{{ $r->imagelink }}" alt="">
                               @endif
                               <p>{{ Str::limit($r->headeline, 30) }}</p>
                           </div>
                      </a>
                </div>
                 @empty

                 @endforelse


                 {{-- <div class="letset-sidebar">
                     <a href="">
                         <div class="sideberletstbox">
                             <img src="https://themelooks.us/demo/usnews/html/img/home-img/world-news-03.jpg" alt="">
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aperiam eveniet commodi, quasi inventore .</p>
                            </div>
                       </a>
                 </div> --}}
                 <div class="social-media-icons">
                     <a href="">
                         <i class="fa-brands fa-facebook"></i>
                     </a>
                     <a href="">
                         <i class="fa-brands fa-twitter"></i>
                     </a>
                     <a href="">
                         <i class="fa-brands fa-instagram"></i>
                     </a>
                     <a href="">
                         <i class="fa-brands fa-youtube"></i>
                     </a>
                  </div>
             </div>
         </div>
         </section>
        </div>
       </section>

