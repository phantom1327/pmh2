@extends('home::layouts.master')
@section('title','Covid-19 Testing at The Princess Margaret Hospital')

@section('content')
<section class="banner-section" style="background-image: url('{{ Module::asset('home:images/home-slide.png')}}'); height: 560px">
		<div class="container">
			<div class="row clearfix align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div style="padding: 5em 0">
						<h1>Covid-19 Testing at PRINCESS MARGARET HOSPITAL</h1>
						<p>Our clinics provide nasal swab tests. You take the sample yourself. The tests are molecular tests. Also called PCR tests, these diagnostic tests detect genetic material of the COVID-19 virus using a lab technique called polymerase chain reaction (PCR)</p>
						<div class="btn-box">
							<a href="{{ route('appointmentform') }}" class="theme-btn">Make An Appointment</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		  
    </section>
    <!-- banner-section end -->


    <!-- about-section -->
    <section class="about-section sec-pad">
        <div class="auto-container">
            <div class="row clearfix align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title left">
                                <p>ABOUT CORONAVIRUS</p>
                                <h2>Know More About <br />Corona Virus</h2>
                                <span class="separator"></span>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eum illum tempora? Ducimus eum culpa voluptates dolorem dolorum et sit nisi.</p>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-washing-hands"></i></div>
                                    <h4><a href="index.php">Wash Your Hands For 20sec</a></h4>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit alias officia aperiam.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-sneeze"></i></div>
                                    <h4><a href="index.php">Cover Nose and Mouth When Sneezing</a></h4>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit alias officia aperiam.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="flaticon-medical-mask"></i></div>
                                    <h4><a href="index.php">Wear A Mask If Available</a></h4>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit alias officia aperiam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div id="video_block_01">
                        <div class="video-inner wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url({{ Module::asset('home:images/resource/about-1.jpg') }});">
                            <div class="video-btn">
                                <a href="https://youtu.be/eNxjsD80LHs" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- feature-section -->
    <section class="feature-section bg-color-1 sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <p>How Virus Spread</p>
                <h2>How Contagion Coronavirus</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-coronavirus-2"></i></div>
                            <h4>Human Contact</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-cough"></i></div>
                            <h4>Air Transmission</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-bacteria"></i></div>
                            <h4>Contaminated Objects</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- hand-wash-process -->
    
    <!-- hand-wash-process -->


    <!-- world-tracker -->
    
    <!-- world-tracker end -->


    <!-- faq-section -->
    <section class="faq-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <p>Protect CoronaVirus</p>
                <h2>Frequently Questions</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <ul class="accordion-box">
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what is a coronavirus and COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block active-block">
                            <div class="acc-btn active"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>how is this coronavirus spread?</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what are the symptoms of COVID-19?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon_plus fa fa-angle-right"></span> <span class="icon icon_minus fa fa-angle-down"></span></div>what do I do if I develop symptoms?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Nostrud exercitation ullamco laboris nisi ut aliquip aute irure dolor indy reprehenderit in voluptate velit esse cillum dole Veniam quis nul pariatur excepteur sint nulla ipsum occaecat.
                                    </div>
                                </div>
                            </div>
                        </li>                                   
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box"><img src="{{ Module::asset('home:images/resource/faq-1.jpg') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
@endsection
