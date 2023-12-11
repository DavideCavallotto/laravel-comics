<style>

ul, ol {
    list-style: none;
}

.col-8 ul {
    text-transform: uppercase;
    font-weight: bold;
}

input {
    border: none;
    border-bottom: 1px solid blue;
}

a {
    text-decoration: none;
    color: black
}


</style>

<section>
    <div class="container py-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-2">
                <img class="header-logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </div>
            <div class="col-8">
                <ul class="d-flex gap-1 justify-content-between">
                    <li><a href="{{route('characters')}}">Characters</a></li>
                    <li><a href="">Comics</a></li>
                    <li><a href="">Movies</a></li>
                    <li><a href="">Tv</a></li>
                    <li><a href="">Games</a></li>
                    <li><a href="">Collectibles</a></li>
                    <li><a href="">Videos</a></li>
                    <li><a href="">Fans</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">Shop</a></li>
                </ul>

            </div>
            <div class="col-2">
                <input type="text" name="" id="" placeholder="Search &#128269;">

            </div>
        </div>
    </div>
    
    
 

</section>