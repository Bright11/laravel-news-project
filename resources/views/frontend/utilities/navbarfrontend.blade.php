<nav >
    <div class="menu">
      <label for="menu-checkbox">
        <div class="mobile-menu"> </div>
      </label>
     <input type="checkbox" id="menu-checkbox">
      <ul class="nav-ul">
        @forelse ($mynewscat as $my)
        <li><a href="#">{{ $my->name }}</a></li>

        @empty

        @endforelse

      </ul>
    </div>
      <div class="logo">
        <img src="{{ asset("logo/logo.jpg") }}" alt="">
      </div>
    </nav>
