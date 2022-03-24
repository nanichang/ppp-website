@extends('layout.master')

@section('css') 
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dflip.min.css') }}">
	<style>
		.pricing1 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
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

.pricing1 .font-14 {
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

.pricing1 .btn-success-gradiant {
  background: #2cdd9b;
  background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
  background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
  background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
  background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
  background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
}

.pricing1 .btn-success-gradiant:hover {
  background: #1dc8cc;
  background: -webkit-linear-gradient(legacy-direction(to right), #1dc8cc 0%, #2cdd9b 100%);
  background: -webkit-gradient(linear, left top, right top, from(#1dc8cc), to(#2cdd9b));
  background: -webkit-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
  background: -o-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
  background: linear-gradient(to right, #1dc8cc 0%, #2cdd9b 100%);
}

.pricing1 .btn-danger-gradiant {
  background: #ff4d7e;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
  background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
  background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
}

.pricing1 .btn-danger-gradiant:hover {
  background: #ff6a5b;
  background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
  background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
  background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
  background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
}

.pricing1 .btn-md {
  padding: 15px 30px;
  font-size: 16px;
}

.pricing1 .onoffswitch {
  width: 70px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  margin: 0 auto;
}

.pricing1 .onoffswitch-label {
  cursor: pointer;
  border: 2px solid transparent;
  border-radius: 20px;
}

.pricing1 .onoffswitch-inner {
  width: 200%;
  margin-left: -100%;
  -webkit-transition: margin 0.3s ease-in 0s;
  -o-transition: margin 0.3s ease-in 0s;
  transition: margin 0.3s ease-in 0s;
}

.pricing1 .onoffswitch-inner::before,
.pricing1 .onoffswitch-inner::after {
  display: block;
  float: left;
  width: 50%;
  height: 30px;
  padding: 0;
  line-height: 30px;
  font-size: 14px;
  color: white;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.pricing1 .onoffswitch-inner::before {
  content: "";
  padding-right: 27px;
  background-color: #2cdd9b;
  color: #FFFFFF;
}

.pricing1 .onoffswitch-inner::after {
  content: "";
  padding-right: 24px;
  background-color: #3e4555;
  color: #999999;
  text-align: right;
}

.pricing1 .onoffswitch-switch {
  width: 23px;
  margin: 6px;
  height: 23px;
  top: -1px;
  bottom: 0;
  right: 35px;
  border-radius: 20px;
  -webkit-transition: all 0.3s ease-in 0s;
  -o-transition: all 0.3s ease-in 0s;
  transition: all 0.3s ease-in 0s;
}

.pricing1 .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
  margin-left: 0;
}

.pricing1 .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
  right: 0px;
}

.pricing1 .price-badge {
  top: -13px;
  left: 0;
  right: 0;
  width: 100px;
  margin: 0 auto;
}

.pricing1 .badge-inverse {
  background-color: #3e4555;
}

.pricing1 .display-5 {
  font-size: 3rem;
	color: #263238;
}

.pricing1 .pricing sup {
  font-size: 18px;
  top: -20px;
}

.pricing1 .pricing .yearly {
  display: none;
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