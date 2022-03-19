@extends('layout.master')

@section('css') 
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dflip.min.css') }}">
@endsection

@section('content')
   

    <section class="product-section" style="margin-top:100px">
        <div class="container">
            <div class="card-group">
                
                <div class="card">
                    <div class="card-body">
                    <div class="_df_thumb" id="df_manual_thumb" source="uploads/media/BCG-Investor-deck.pdf" thumb="uploads/media/cover/first-cover.png"> BCG Investor Deck</div >
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script src="{{ URL::asset('assets/js/jquery.matchHeight.js') }}"></script>
<script src="{{ URL::asset('assets/js/dflip.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pdf.combined.js') }}"></script>
<script>
	$(function () {
		$('.card.no-overflow').matchHeight({
			byRow: true,
			property: 'height',
			target: null,
			remove: false
		});
	});

	console.log($(".section img"));
	$(".section img").click(function () {
		$(".lightbox").fadeIn(300);
		$(".lightbox").append("<img src='" + $(this).attr("src") + "' alt='" + $(this).attr("alt") + "' />");
		$(".filter").css("background-image", "url(" + $(this).attr("src") + ")");
		/*$(".title").append("<h1>" + $(this).attr("alt") + "</h1>");*/
		$("html").css("overflow", "hidden");
		if ($(this).is(":last-child")) {
			$(".arrowr").css("display", "none");
			$(".arrowl").css("display", "block");
		} else if ($(this).is(":first-child")) {
			$(".arrowr").css("display", "block");
			$(".arrowl").css("display", "none");
		} else {
			$(".arrowr").css("display", "block");
			$(".arrowl").css("display", "block");
		}
	});

	$(".close").click(function () {
		$(".lightbox").fadeOut(300);
		$(".lightbox h1").remove();
		$(".lightbox img").remove();
		$("html").css("overflow", "auto");
	});

	$(document).keyup(function (e) {
		if (e.keyCode == 27) {
			$(".lightbox").fadeOut(300);
			$(".lightbox img").remove();
			$("html").css("overflow", "auto");
		}
	});

	$(".arrowr").click(function () {
		var imgSrc = $(".lightbox img").attr("src");
		var search = $("section").find("img[src$='" + imgSrc + "']");
		var newImage = search.next().attr("src");
		/*$(".lightbox img").attr("src", search.next());*/
		$(".lightbox img").attr("src", newImage);
		$(".filter").css("background-image", "url(" + newImage + ")");

		if (!search.next().is(":last-child")) {
			$(".arrowl").css("display", "block");
		} else {
			$(".arrowr").css("display", "none");
		}
	});

	$(".arrowl").click(function () {
		var imgSrc = $(".lightbox img").attr("src");
		var search = $("section").find("img[src$='" + imgSrc + "']");
		var newImage = search.prev().attr("src");
		/*$(".lightbox img").attr("src", search.next());*/
		$('.lightbox img').attr("src", newImage);
		$(".filter").css("background-image", "url(" + newImage + ")");

		if (!search.prev().is(":first-child")) {
			$(".arrowr").css("display", "block");
		} else {
			$(".arrowl").css("display", "none");
		}
	});

	let iframe = $('.videos-header iframe');
	let videoHeader = $('.videos-header > picture');
	let frameButton = $('.frameToggle');
	let frameClose = $('.frameBTN');
	frameButton.each(function () {
		$(this).on("click", function (event) {
			event.preventDefault();
			console.log($(this));
			let dataUrl = $(this).attr("data-url");
			iframe.attr('src', dataUrl);
			videoHeader.removeClass('noframe')
		});
	});
	frameClose.on("click", function (event) {
		event.preventDefault();
		iframe.attr('src', '');
		videoHeader.addClass('noframe')
	});

</script>
@endsection