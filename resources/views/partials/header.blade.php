<style lang="scss" scoped>

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


.container-fluid img {
    object-position: top;
}

</style>

<section>
    <div class="container py-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-2">
                <img class="header-logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </div>
            <div class="col-8">
                <ul class="d-flex justify-content-between">
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>Tv</li>
                    <li>Games</li>
                    <li>Collectibles</li>
                    <li>Videos</li>
                    <li>Fans</li>
                    <li>News</li>
                    <li>Shop</li>
                </ul>

            </div>
            <div class="col-2">
                <input type="text" name="" id="" placeholder="Search &#128269;">

            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <img class="h-25 w-100 object-fit-cover" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    
 

</section>