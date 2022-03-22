@extends('layout.master')

@section('css') 
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dflip.min.css') }}">
@endsection

@section('content')
	<section class="ptb-100" style="margin-top:100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>SUSTAINABLE ECONOMIC REBIRTH</strong>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class=" container" style="margin-bottom:100px;">
		<div class="accordion" id="accordionPanelsStayOpenExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-headingOne">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#agriculture" aria-expanded="true" aria-controls="agriculture">
						AGRICULTURE
					</button>
				</h2>
				<div id="agriculture" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
					<div class="accordion-body">
						<ul>
							<li><strong>Food Preservation & Value Addition</strong> - Reduction in post harvest losses through cold rooms, storage facilities, etc.</li>
							<li><strong>Agricultural Production & Irrigation</strong> - Commercial & Mechanized Farming</li>
							<li><strong>Agro value Chain Development</strong> - Potato, Cattle, Fish, Tomato, Cut Flower Industry, etc.</li>
							<li><strong>Agro Forestation</strong> - Sustainability growth through economic tree planting, etc.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#natural-minerals" aria-expanded="false" aria-controls="natural-minerals">
						NATURAL MINERALS
					</button>
				</h2>
				<div id="natural-minerals" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
					<div class="accordion-body">
						<strong>Mineral Development Centre</strong> Value addition to the linkages in the mining sector
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-headingThree">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#trade__commerce" aria-expanded="false" aria-controls="trade__commerce">
						TRADE & COMMERCE
					</button>
				</h2>
				<div id="trade__commerce" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
					<div class="accordion-body">
						<p>
							<strong>Modern Markets & Mall Development</strong>
						</p>
						<p>
							<strong>Agro & Mining Processing Centes/Factories</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="tourism-heading">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tourism" aria-expanded="false" aria-controls="tourism">
						TOURISM & HOSPITALITY
					</button>
				</h2>
				<div id="tourism" class="accordion-collapse collapse" aria-labelledby="tourism-heading">
					<div class="accordion-body">
						<p>
							<strong>Jos Tourist City – Wildlife Park, Mado Village & Amusement Park</strong>
						</p>
					</div>
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
                                <strong>PHYSICAL INSTRUCTURE DEVELOPMENT</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>TRANSPORTATION</strong>
                                    </h4>
									<p>- <strong>International Cargo Airport </strong> - Upgrade of Yakubu Gowon airport to international cargo airport status</p>
									<p>- <strong>Mass Bus Transit </strong> - Plateau Riders (BRT) & Upgrade of Bus Terminals</p>
									<p>- <strong>Trucking Hubs </strong> - Weigh Bridges, trucking hubs and transit parks</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-shopping-basket mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>INDUSTRIAL PROCESSING ZONES</strong>
                                    </h4>
									<p>- <strong>Sustainable Industrial Clusters for Exports </strong> - Export Processing Zones (EPZ)/Sustainable Investment Clusters (SIC)</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-update mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>BROADBAND & POWER</strong>
                                    </h4>
									<p>- <strong>Sustainable Smart City </strong> - Fiber Optic, Deployment, Tech Parks, ISPs</p>
									<p>- <strong>Renewable Energy Development </strong> - Rural Electrification, Hydro, Solar & Wind</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-home mobi-mbri"></span>
                                </div>
                                <div class="text-box">
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
            </div>
        </div>
    </section> 

	<section data-bs-version="5.1" class="features1 cid-sZLI6Fmvd7 mbr-parallax-background" id="features1-1a">

		<div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(40, 120, 26);">
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-9">
					<h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>PEACE, SECURTIY & GOOD GOVERNANCE</strong></h3>
				</div>
			</div>
			<div class="row">
				<div class="card col-12 col-md-6 col-lg-3" style="border:none">
					<div class="card-wrapper">
						<div class="card-box align-center">
							<div class="iconfont-wrapper">
								<span class="mbr-iconfont mobi-mbri-music mobi-mbri" style="color: rgb(251, 251, 251); fill: rgb(251, 251, 251);"></span>
							</div>
							<h5 class="card-title mbr-fonts-style display-7"><strong>ENTERTAINMENT & SPORTS</strong></h5>
							
							<p class="card-text mbr-fonts-style display-7"><strong>State of the Art Multipurpose Center</strong> - Indoor Theater with inclusive malls & facilities with huge capacity to host major events in secure location</p>
							<p class="card-text mbr-fonts-style display-7"><strong>Sports & Entertainment Complexes</strong> Upgrade with state of the art equipment and facilities</p>
						</div>
					</div>
				</div>
				<div class="card col-12 col-md-6 col-lg-3" style="border:none">
					<div class="card-wrapper">
						<div class="card-box align-center">
							<div class="iconfont-wrapper">
								<span class="mbr-iconfont mobi-mbri-preview mobi-mbri" style="color: rgb(251, 251, 251); fill: rgb(251, 251, 251);"></span>
							</div>
							<h5 class="card-title mbr-fonts-style display-7"><strong>SECURITY</strong></h5>
							<p class="card-text mbr-fonts-style display-7"><strong>Low Cost Housing Estate Scheme (Impact Investors) - </strong> IDP resettlement, boreholes & mini markets in communities.</p>
							<p class="card-text mbr-fonts-style display-7"><strong>Garden of Peace - </strong> Impact investor Private Sector Support funds.</p>
						</div>
					</div>
				</div>
				<div class="card col-12 col-md-6 col-lg-3" style="border:none">
					<div class="card-wrapper">
						<div class="card-box align-center">
							<div class="iconfont-wrapper">
								<span class="mbr-iconfont mobi-mbri-website-theme-2 mobi-mbri" style="color: rgb(251, 251, 251); fill: rgb(251, 251, 251);"></span>
							</div>
							<h5 class="card-title mbr-fonts-style display-7"><strong>EDUCATION</strong></h5>
							<p class="card-text mbr-fonts-style display-7">Vocational Schools – Skills development centers for artisans, technicians & skilled workers, etc.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
@endsection