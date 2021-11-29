@extends('shop.layouts.app')
@section('content')
<section class="home-banner" id="home">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 position-u flex-align wow fadeInLeft">
				<div class="banner-contain">
					<h1 class="banner-heading">Invest In <span>Cryptocoin</span> Way To Trade</h1>
					<p class="banner-des">Ace Capital has developed system by using Advanced Technology and Blockchain.
						System is much Simpler, more Profitable, Secured, and 100% Transparent, tron is one of the
						largest blockchain-based operating systems in the world.</p>
					<a href="#" class="btn">Logins</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 position-u wow fadeInRight">
				<div class="banner-img">
					<img src="{{ asset('shop/assets/img/header.png') }}" alt="banner"> 
				</div>
			</div>
		</div>
	</div>
</section>

<section class="work-part lightskyblue ptb-100" id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp">
				<div class="section-heading text-center pb-65">
					<label class="sub-heading">About Us</label>
					<h2 class="heading-title">Why Choose Ace Capital</h2>
					<!-- <p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center flex-align justify-center wow fadeInLeft">
				<div class="work-box1">
					<div class="work-box-bg"></div>
					<img src="{{ asset('shop/assets/img/about-us.png') }}" alt="Work Process">
				</div>
			</div>
			<div class="col-md-6 flex-align wow fadeInRight">
				<div class="work-box">
					<h3 class="work-process-title pb-25">Ace Capital is a decentralized network</h3>
					<p class="work-des pb-20">That allows anyone to invoice a payment for which the recipient can pay in
						a secure way All the information is stored in a decentralized authentic ledger, this results in
						cheaper, easier, and more secure payments along with it allows for a wide range of automation
						possibilities.</p>

					<ul class="check-list">
						<li><span><i class="fa fa-check" aria-hidden="true"></i></span>
							<p>Universal because it is designed to support 100% of global transactions, regardless of
								currency, legislation or language. Ace Capital is built to last.</p>
						</li>
						<li><span><i class="fa fa-check" aria-hidden="true"></i></span>
							<p>Smart because unlike an existing standard accounting book, Ace Capital Protocol is at the
								origin of the exchanges and integrates a computerized trade code, as well as the
								management of a multitude of payment terms.</p>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature-part pt-100 pb-80" id="services">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp">
				<div class="section-heading text-center pb-65">
					<label class="sub-heading">Ace Capital</label>
					<h2 class="heading-title">Best Services</h2>

				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-4 wow fadeInUp ">
				<div class="feature-box">
					<div class="feature-icon">
						<img src="{{ asset('shop/assets/img/earning.png') }}" alt="Early Bonus">
					</div>
					<div class="feature-contain pt-25">
						<h2 class="feature-title pb-15">Attractive rate<br> of returns</h2>

					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp ">
				<div class="feature-box">
					<div class="feature-icon">
						<img src="{{ asset('shop/assets/img/solution.png') }}" alt="Univarsal Access">
					</div>
					<div class="feature-contain pt-25">
						<h2 class="feature-title pb-15">Seamless<br> Process</h2>

					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp ">
				<div class="feature-box">
					<div class="feature-icon">
						<img src="{{ asset('shop/assets/img/market-analysis.png') }}" alt="Secure Storage">
					</div>
					<div class="feature-contain pt-25">
						<h2 class="feature-title pb-15">Detailed<br> Analysis</h2>

					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp ">
				<div class="feature-box">
					<div class="feature-icon">
						<img src="{{ asset('shop/assets/img/supervised.png') }}" alt="Low Cost">
					</div>
					<div class="feature-contain pt-25">
						<h2 class="feature-title pb-15">Complete<br> Transparency</h2>

					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp">
				<div class="feature-box">
					<div class="feature-icon">
						<img src="{{ asset('shop/assets/img/investor.png') }}" alt="Several Profit">
					</div>
					<div class="feature-contain pt-25">
						<h2 class="feature-title pb-15">Reputed<br> Co-Investors</h2>

					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp ">
				<div class="feature-box">
					<div class="feature-icon">
						<img src="https://themes.templatescoder.com/crypton/html/demo/1-0/02-Light-Theme/images/feature-1.png"
							alt="Safe & Secure">
					</div>
					<div class="feature-contain pt-25">
						<h2 class="feature-title pb-15">Returns with monthly payouts</h2>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="timeline lightskyblue ptb-100" id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp">
				<div class="section-heading text-center pb-65">
					<label class="sub-heading">Ace Capital</label>
					<h2 class="heading-title">How It Work</h2>

				</div>
			</div>
		</div>
		<div class="main-roadmap">
			<div class="row">
				<div class="col-md-12">
					<div class="h-border wow fadeInLeft"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="roadmap-slider owl-carousel">
						<div class="roadmap wow fadeInLeft">
							<div class="roadmap-box text-center">
								<div class="date-title">1</div>
								<div class="map-graphic">
									<div class="small-round"><span></span></div>
									<div class="v-row"></div>
								</div>
								<div class="roadmap-detail-box">
									<img src="{{ asset('shop/assets/img/opportunity.png') }}">
									<p>Partner onboarding and listing the investment opportunity</p>
								</div>
							</div>
						</div>
						<div class="roadmap wow fadeInLeft">
							<div class="roadmap-box text-center">
								<div class="date-title">2</div>
								<div class="map-graphic">
									<div class="small-round"><span></span></div>
									<div class="v-row"></div>
								</div>
								<div class="roadmap-detail-box">
									<img src="{{ asset('shop/assets/img/investors.png') }}">
									<p>Contribution from multiple investors </p>
								</div>
							</div>
						</div>
						<div class="roadmap wow fadeInLeft">
							<div class="roadmap-box text-center">
								<div class="date-title">3</div>
								<div class="map-graphic">
									<div class="small-round"><span></span></div>
									<div class="v-row"></div>
								</div>
								<div class="roadmap-detail-box">
									<img src="{{ asset('shop/assets/img/assets.png') }}">
									<p>Purchase assets from quality OEMs and leasing them to partners</p>
								</div>
							</div>
						</div>
						<div class="roadmap wow fadeInLeft">
							<div class="roadmap-box text-center">
								<div class="date-title">4</div>
								<div class="map-graphic">
									<div class="small-round"><span></span></div>
									<div class="v-row"></div>
								</div>
								<div class="roadmap-detail-box">
									<img src="{{ asset('shop/assets/img/return-on-investment.png') }}">
									<p>Timely returns to investors </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="team-part pt-100 pb-55" id="Community">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp">
				<div class="section-heading text-center pb-65">
					<label class="sub-heading">Ace Capital</label>
					<h2 class="heading-title">Community Of Winners</h2>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 wow fadeInLeft pb-45">
				<div class="row team-box flex-align">
					<div class="col-lg-12">
						<div class="team-img">
							<img src="{{ asset('shop/assets/img/track-record.png') }}" alt="team member">
						</div>
					</div>
					<div class="col-lg-12 team-des">
						<h2 class="member-name">Successful Track Record of Portfolio Companies:</h2>
						<p class="member-des">A strong portfolio development incubation program ensures higher chances
							of success.</p>

					</div>
				</div>
			</div>
			<div class="col-md-4 pb-45 wow fadeInRight">
				<div class="row team-box flex-align">
					<div class="col-lg-12">
						<div class="team-img">
							<img src="{{ asset('shop/assets/img/businessman.png') }}" alt="team member">
						</div>
					</div>
					<div class=" col-lg-12 team-des">
						<h2 class="member-name">Access to Curated<br> Deal Flow :</h2>
						<p class="member-des">Opportunity to invest in 40- 50 curated startups over a year selected from
							over 10,000 applications.</p>

					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInLeft pb-45">
				<div class="row team-box flex-align">
					<div class="col-lg-12">
						<div class="team-img">
							<img src="{{ asset('shop/assets/img/sponsor.png') }}" alt="team member">
						</div>
					</div>
					<div class="col-lg-12 team-des">
						<h2 class="member-name">Become a Lead<br> Investor:</h2>
						<p class="member-des">A chance to lead a deal, thereby work closely with the startup and the
							founding team.</p>

					</div>
				</div>
			</div>
			<div class="col-md-4 pb-45 wow fadeInRight">
				<div class="row team-box flex-align">
					<div class="col-lg-12">
						<div class="team-img">
							<img src="{{ asset('shop/assets/img/online.png') }}" alt="team member">
						</div>
					</div>
					<div class="col-lg-12 team-des">
						<h2 class="member-name">Exclusive Networking:</h2>
						<p class="member-des">Meet, greet and network with the VCats investor community from across
							geographies through various initiatives events.</p>

					</div>
				</div>
			</div>
			<div class="col-md-4 pb-45 wow fadeInRight">
				<div class="row team-box flex-align">
					<div class="col-lg-12">
						<div class="team-img">
							<img src="{{ asset('shop/assets/img/travel.png') }}" alt="team member">
						</div>
					</div>
					<div class="col-lg-12 team-des">
						<h2 class="member-name">International Exposure:</h2>
						<p class="member-des">Be a part of the international delegations to various countries for
							networking, learning and exchange.</p>

					</div>
				</div>
			</div>
			<div class="col-md-4 pb-45 wow fadeInRight">
				<div class="row team-box flex-align">
					<div class="col-lg-12">
						<div class="team-img">
							<img src="{{ asset('shop/assets/img/empowerment.png') }}" alt="team member">
						</div>
					</div>
					<div class="col-lg-12 team-des">
						<h2 class="member-name">Business Synergies:</h2>
						<p class="member-des">Collaborate and create partnerships with the portfolio companies.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="tokensale-part" class="token-sale parallax lightskyblue ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
				<div class="section-heading text-center pb-65">
					<label class="sub-heading">Ace Capital</label>
					<h2 class="heading-title">Why Leasing?</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="row Why-Leasing-row align-items-center">
					<div class="col-lg-4">
						<div class="Why-Leasing-img">
							<img src="{{ asset('shop/assets/img/predictive-chart.png') }}">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="Why-Leasing-content">
							<h2>Predictable returns</h2>
							<p>Pre-agreed monthly payments for the full lease tenure with no day to day volatility like
								stock markets</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row Why-Leasing-row align-items-center">
					<div class="col-lg-4">
						<div class="Why-Leasing-img">
							<img src="{{ asset('shop/assets/img/contract.png') }}">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="Why-Leasing-content">
							<h2>Strong Collateral</h2>
							<p>Upfront security deposit as well as the ability to recover, re-lease or sell assets to
								mitigate risk</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row Why-Leasing-row align-items-center">
					<div class="col-lg-4">
						<div class="Why-Leasing-img">
							<img src="{{ asset('shop/assets/img/taxes.png') }}">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="Why-Leasing-content">
							<h2>Tax Benefits</h2>
							<p>Ability to claim depreciation and expenses to reduce the effective tax rate for lessor
								(you)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="faq-part-2 ptb-100" id="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
				<div class="section-heading text-center pb-65">
					<label class="sub-heading">FAQ</label>
					<h2 class="heading-title">Frequently asked questions</h2>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="general" role="tabpanel">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="accordion-faq-box mb-20">
									<a href="javascript:void(0)" class="accordion-faq-title"> WHO MANAGES THE
										PLATFORM?</a>
									<div class="accordion-faq-content" style="display: none;">
										<p>ACE CAPITAL does not have a Manager. This means that the platform is fully
											decentralized (i.e. it has no leaders or admins).</p>
									</div>
								</div>
								<div class="accordion-faq-box mb-20">
									<a href="javascript:void(0)" class="accordion-faq-title"> WHAT IS
										DECENTRALIZATION?</a>
									<div class="accordion-faq-content">
										<p>It is a system in which there are no admins, there is no single server or
											system monitoring, project management. The creators of the platform are the
											same project participants like you.</p>
									</div>
								</div>
								<div class="accordion-faq-box mb-20">
									<a href="javascript:void(0)" class="accordion-faq-title"> WHAT IS TRON?</a>
									<div class="accordion-faq-content">
										<p>Tron is one of the leading cryptocurrency, which has existed since 2017 At
											the same time, it is a software framework for the Defi (decentralized
											finance) market, since the blockchain of this crypto currency allows you not
											only to follow the history of transactions, but also to save any executable
											software products (smart contracts). A huge number of major crypto companies
											use this platform.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="accordion-faq-box mb-20">
									<a href="javascript:void(0)" class="accordion-faq-title"> WHAT IS A SMART
										CONTRACT?</a>
									<div class="accordion-faq-content" style="display: none;">
										<p>Smart contract– the algorithm inside the blockchain cryptocurrencies. In our
											case that Tron is number one among the those on which it is possible to
											create smart contracts. The main purpose of such contracts is the automation
											of the relationship, the opportunity to make commitments samospalenie.</p>
									</div>
								</div>
								<div class="accordion-faq-box mb-20">
									<a href="javascript:void(0)" class="accordion-faq-title"> HOW MUCH CAN YOU EARN?</a>
									<div class="accordion-faq-content">
										<p>The amount of your income depends on the number of invited people and how
											actively they will work.</p>
									</div>
								</div>
								<div class="accordion-faq-box mb-20">
									<a href="javascript:void(0)" class="accordion-faq-title"> WHAT DATA DO I NEED TO
										REGISTER?</a>
									<div class="accordion-faq-content">
										<p>To register you will need only a wallet tron pro link or Token pocket-</p>
									</div>
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
