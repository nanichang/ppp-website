@extends('layout.master')

@section('css') 
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dflip.min.css') }}">
	<style>
		.modal-dialog {
			max-width: 800px;
			margin: 30px auto;
		}

		.modal-body {
			position:relative;
			padding:0px;
		}
		.btn-close {
			position:absolute;
			right:-30px;
			top:0;
		}
	</style>
@endsection

@section('content')
	<section data-bs-version="5.1" class="info3 cid-t0VvFBaY4l mbr-parallax-background" id="info3-1k" style="z-index: 0; position: relative; ">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(40, 120, 26);">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-1"><strong>Our Media</strong></h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<section class=" container" style="margin-bottom:100px;margin-top:50px;">
        <div class="row">
			<div class="col-3 col-md-2">
				<div class="card profile-card">
					<div class="_df_thumb" id="df_manual_thumb" source="uploads/media/BCG-Investor-deck.pdf" thumb="uploads/media/cover/first-cover.png"> 
						BCG Investor Deck
					</div >
				</div>
			</div>
			<div class="col-3 col-md-2">
				<div class="card profile-card">
					<div class="_df_thumb" id="df_manual_thumb" source="uploads/media/Investing-in-Plateau-State.pdf" thumb="uploads/media/cover/investing-in-plateau.png"> 
						Investing In Plateau State
					</div >
				</div>
			</div>
			<div class="col-3 col-md-2">
				<div class="card profile-card">
					<div class="_df_thumb" id="df_manual_thumb" source="uploads/media/Plateau-State-Green-Growth-Strategy.pdf" thumb="uploads/media/cover/growth.png"> 
						Plateau State Green Growth Strategy
					</div >
				</div>
			</div>
			<div class="col-3 col-md-2">
				<div class="card profile-card">
					<div class="_df_thumb" id="df_manual_thumb" source="uploads/media/Plateau_PPP_Investment_copyRight_Mar_2022.pdf" thumb="uploads/media/cover/ppp-investment.png"> 
						Plateau PPP Investment
					</div >
				</div>
			</div>
        </div>
    </section>

	<section data-bs-version="5.1" class="features12 cid-sZLnoZzGjA" id="features13-18">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2">
                                <strong>Video Gallery</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="row">
						<div class="col-6 col-md-3">
							<div class="card profile-card">
								<button type="button" class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/LFoWMJQf1qw" data-bs-target="#myModal">
									<img src="assets/images/play.png" alt="" />
								
								</button>
								<div class="profile text-center">
									<p>Investment opportunities In Plateau State</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="card profile-card">
								<button type="button" class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/rduEmRVNiq0" data-bs-target="#myModal">
									<img src="assets/images/play.png" alt="" />
								
								</button>
								<div class="profile text-center">
									<p>Asmor Worldwide</p>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					</button>        
						<!-- 16:9 aspect ratio -->
					<div class="ratio ratio-16x9">
						<iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
					</div>

				</div>
			</div>
		</div> 
	</div>
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


		$(document).ready(function() {
			// Gets the video src from the data-src on each button
			var $videoSrc;  
			$('.video-btn').click(function() {
				$videoSrc = $(this).data( "src" );
			});
			console.log($videoSrc);
			// when the modal is opened autoplay it  
			$('#myModal').on('shown.bs.modal', function (e) {
				$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
			})
			// stop playing the youtube video when I close the modal
			$('#myModal').on('hide.bs.modal', function (e) {
				$("#video").attr('src',$videoSrc); 
			})
		});



	</script>
@endsection