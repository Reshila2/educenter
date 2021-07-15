<nav>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
  </label>
  <label class="logo">Edu<span id=logo1>land<span></label>
  <ul>
    <li><a class="active" id="home" href="#">{{__('lang.home')}}</a></li>
    <li><a href="#" id="unt">{{__('lang.unt')}}</a></li>
    <li><a href="#"id="services">{{__('lang.services')}}</a></li>
    <li><a href="#"id="team">{{__('lang.team')}}</a></li>
    <li><a href="#" id="contact">{{__('lang.contact')}}</a></li>
    <li> 
     <select class="form-control Langchange">
          <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
          <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Русский</option>                    
      </select>
    </li>
    <li>
             @if(auth()->check())
                <a href="#">{{ auth()->user()->name }}
                    @if(auth()->user()->avatar)
                      <img src="{{ asset('storage/' . auth()->user()->avatar)}}" style="height:5vw" alt=""></a>
              @endif
                <li><a href="{{ route('logout') }}" class="menu-btn">Sign out</a></li>
              @else
                <!-- <li><a href="{{route ('register.create') }}" class="menu-btn">Sign up</a></li> -->
                <li><a href="{{route ('login.create') }}" class="menu-btn">Sign in</a></li>
              @endif
    </li>
  </ul>
</nav>

<section class="Home">
<div class="container12345">

      <img src="" class="HomeP" alt="">
       <!-- <div class="FirstText">
          <p class="text1">Find your power</p>
          <p class="text2">within with us</p>
          <button class="More">More</button>
      </div> -->
  </div>
</section>
<style>
    nav ul li #lang{
    font-size: 15px;
    background: none;
    color:white;
  }
  nav ul li option{
    font-size: 15px;
    background: none;
    color:black;
  }
  #lang:hover,#lang.active{
    background: none;

  }
</style>
<script type="text/javascript">
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
