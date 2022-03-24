@extends('layout.master')

@section('css') 
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dflip.min.css') }}">
	<style>
		.pricing1 {
		/* font-family: "Montserrat", sans-serif; */
			/* color: #8d97ad; */
			font-weight: 300;
		}

		.pricing1 h1,
		.pricing1 h2,
		.pricing1 h3,
		.pricing1 h4,
		.pricing1 h5,
		.pricing1 h6 {
		color: #3e4555;
		}

		.pricing1 .font-weight-medium {
			font-weight: 500;
		}

		.pricing1 .bg-light {
			background-color: #f4f8fa !important;
		}

		.pricing1 .subtitle {
			color: #8d97ad;
			line-height: 24px;
			font-size: 14px;
		}

		.pricing1 h5 {
			line-height: 22px;
			font-size: 18px;
		}

		.pricing1 .card.card-shadow {
			-webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
			box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
		}

		.pricing1 .on-hover {
			-webkit-transition: 0.1s;
			-o-transition: 0.1s;
			transition: 0.1s;
		}

		.pricing1 .on-hover:hover {
			-ms-transform: scale(1.05);
			transform: scale(1.05);
			-webkit-transform: scale(1.05);
			-webkit-font-smoothing: antialiased;
		}

		.pricing1 .display-5 {
			font-size: 3rem;
			color: #263238;
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
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-1"><strong>Projects</strong></h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	
	<section class="features12 cid-sZLnoZzGjA">
		<div class="pricing1 py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="card card-shadow on-hover border-0 mb-4">
							<div class="card-body font-14">
								<h5 class="mt-3 mb-1 font-weight-medium">SUSTAINABLE ECONOMIC REBIRTH</h5>
								<hr />
								<div class="item mbr-flex">
									<div class="text-box">
										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>AGRICULTURE</strong>
										</h4>
										<ul>
											<li><strong>Food Preservation & Value Addition</strong> - Reduction in post harvest losses through cold rooms, storage facilities, etc.</li>
											<li><strong>Agricultural Production & Irrigation</strong> - Commercial & Mechanized Farming</li>
											<li><strong>Agro value Chain Development</strong> - Potato, Cattle, Fish, Tomato, Cut Flower Industry, etc.</li>
											<li><strong>Agro Forestation</strong> - Sustainability growth through economic tree planting, etc.</li>
										</ul>
										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>NATURAL MINERALS</strong>
										</h4>

										<ul>
											<li><strong>Mineral Development Centre</strong> - Value addition to the linkages in the mining sector</li>
										</ul>

										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>TRADE & COMMERCE</strong>
										</h4>
										

										<ul>
											<li>Modern Markets & Mall Development</li>
											<li>Agro & Mining Processing Centes/Factories</li>
										</ul>

										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>TOURISM & HOSPITALITY</strong>
										</h4>
										<ul>
											<li>
												<strong>Jos Tourist City</strong> - Wildlife Park, Mado Village & Amusement Park
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="card card-shadow on-hover border-0 mb-4">
							<div class="card-body font-14">
								<h5 class="mt-3 mb-1 font-weight-medium">PHYSICAL INSTRUCTURE DEVELOPMENT</h5>
								<hr />
								<div class="item mbr-flex">
									<div class="text-box">
										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>TRANSPORTATION</strong>
										</h4>
										<p>- <strong>International Cargo Airport </strong> - Upgrade of Yakubu Gowon airport to international cargo airport status</p>
										<p>- <strong>Mass Bus Transit </strong> - Plateau Riders (BRT) & Upgrade of Bus Terminals</p>
										<p>- <strong>Trucking Hubs </strong> - Weigh Bridges, trucking hubs and transit parks</p>
										
										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>INDUSTRIAL PROCESSING ZONES</strong>
										</h4>

										<p>- <strong>Sustainable Industrial Clusters for Exports </strong> - Export Processing Zones (EPZ)/Sustainable Investment Clusters (SIC)</p>

										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>BROADBAND & POWER</strong>
										</h4>

										<p>- <strong>Sustainable Smart City </strong> - Fiber Optic, Deployment, Tech Parks, ISPs</p>
										<p>- <strong>Renewable Energy Development </strong> - Rural Electrification, Hydro, Solar & Wind</p>

										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>REAL ESTATE DEVELOPMENT</strong>
										</h4>
										
										<p>- <strong>Modern Full Serviced Residential Estate Scheme </strong> - 1.Estate schemes for low cost & luxury housing</p>
										<p>- <strong>Commercial & Business Centers </strong> - 2.Upgrades of hotels, business, entertainment & recreational parks</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="card card-shadow on-hover border-0 mb-4">
							<div class="card-body font-14">
								<h5 class="mt-3 mb-1 font-weight-medium">PEACE, SECURTIY & GOOD GOVERNANCE</h5>
								<hr />
								<div class="item mbr-flex">
									<div class="text-box">
										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>ENTERTAINMENT & SPORTS</strong>
										</h4>
										<p><strong>State of the Art Multipurpose Center</strong> - Indoor Theater with inclusive malls & facilities with huge capacity to host major events in secure location</p>
										<p><strong>Sports & Entertainment Complexes</strong> Upgrade with state of the art equipment and facilities</p>
										
										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>SECURITY</strong>
										</h4>

										<p><strong>Low Cost Housing Estate Scheme (Impact Investors) - </strong> IDP resettlement, boreholes & mini markets in communities.</p>
										<p><strong>Garden of Peace - </strong> Impact investor Private Sector Support funds.</p>

										<h4 class="icon-title mbr-black mbr-fonts-style display-7">
											<strong>EDUCATION</strong>
										</h4>

										<p><strong>Vocational Schools </strong> Skills development centers for artisans, technicians & skilled workers, etc.</p>

										
									</div>
								</div>
							</div>
						</div>
					</div>
   				 </div>
  			</div>
		</div>
	</section>

@endsection