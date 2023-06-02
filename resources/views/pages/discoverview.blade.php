@extends('pages.layout')
@section("custom-css")
    <link rel="stylesheet" type="text/css" href="{{url('/css/ImageSlider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/Game.css')}}">
@endsection
@section("content")

    <div class='Game-showcase'>
        <div class='Game-title'>{{ $title}}</div>
        <div class='Game-Content'>
            <div class='slideshow-gallery'>
                    <div>
                        <div class='carousel-container'>
                            <div class='leftArrow' onClick="goToPrevious()">&#10094;</div>
                            <div class='rightArrow' onClick="goToNext()">&#10095;</div>
                            <img id="gallery-main-image" alt='gameimage' />
                        </div>
                        <div class='Gallery'>
                            @foreach ($gallery as $img)
                            <div class='gallery-images'>
                                <img src="{{url($path . $img)}}" alt='gameimages' />
                            </div>
                             @endforeach
                        </div>
                    </div>
            </div>
            <div class='descriptions'>
                <div class='game_cover'><img src="{{url($image)}}" alt='img' /></div>
                <div class='game_desc'>{{$description}}</div>
                <div class='Game-Add'>
                    <button class='Game-button'>Add to your wishlist</button>
                    <button class='Game-button'>Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

<script>
    const images =  @json($gallery);
    let currentIndex = 0;

    document.getElementById("gallery-main-image").src = "{{url('/')}}/" +"{{$path}}" + images[currentIndex];

    function goToNext(){
        if(currentIndex + 1 < images.length) {
            currentIndex++;
            document.getElementById("gallery-main-image").src = "{{url('/')}}/" +"{{$path}}" + images[currentIndex];
        }

    }

    function goToPrevious() {
        if(currentIndex !== 0) {
            currentIndex--;
            document.getElementById("gallery-main-image").src = "{{url('/')}}/" +"{{$path}}" + images[currentIndex];
        }
    }
</script>

@endsection


