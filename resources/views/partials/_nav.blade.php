<nav>
    <div class="nav-wrapper red">
        <a href="#"> <img src="{{asset('default/logo.png')}}" alt="" width="70px" height="60px"> projet</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="grey-text text-lighten-3" href="{{ url('/')}}">home</a></li>
           <li><a class="grey-text text-lighten-3" href="{{ route('gallerie')}}">Gallerie</a></li>
            <li><a class="grey-text text-lighten-3" href="{{ route('pdf')}}">Pdf</a></li>
            <li><a class="grey-text text-lighten-3" href="{{ route('word') }}">Word</a></li>
            <li><a class="grey-text text-lighten-3" href="{{ route('liste') }}">Liste</a></li>
        </ul>
    </div>
</nav>
