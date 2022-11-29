<div class="container">
    @guest
        <category-recipe></category-recipe>
        @else
            @if (Auth::user()->id)
                <category-recipe roles={{ Auth::user()->roles[0]->role }} user={{ Auth::user()->id }} ></category-recipe>                 
            @endif 
    @endguest    
</div>