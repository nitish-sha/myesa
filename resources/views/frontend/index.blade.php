 

 @include('frontend.layout.header')
  <link rel="stylesheet" href="{{asset('/public/forntend/css/home.css')}}"/>
 <section class="bannerSlider">
            <div class="container">
                <div class="textSlider">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 d-flex align-items-center">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner ">
                                    <div class="carousel-item animate_d animate__bounceInLeft active">
                                        <h1 class="h1 m-0">Get ESA Letter to Manage Mental Conditions </h1>
                                        <ul class="p-0 mt-2">
                                            <li>Instant PDF Delivery via text or email </li>
                                            <li>100% Money Back Guarantee if you fail to qualify</li>
                                            <li>Highly qualified and licensed medical health professionals.</li>
                                        </ul>
                                        <div class="priceFrom d-flex align-items-center justify-content-between">
                                            <div class="leftSide">
                                                <p class="m-0">price from</p>
                                                <span>$99.99/year</span>
                                            </div>
                                            <div class="rightSide">
                                                <picture>
                                                    <source type="image/webp" data-srcset="{{asset('public/forntend/img/trustSpot.webp')}}" />
                                                    <source type="image/png" data-srcset="{{asset('public/forntend/img/trustSpot.png')}}" />
                                                    <img data-src="{{asset('public/forntend/img/trustSpot.png')}}" class="lazyload" alt="Trust Spot" />
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="seondaryBtn mt-2">
                                            <button type="button" class="btn bt_n">Pre-Qualify Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="brandsBlock">
            <div class="container">
                <div class="brandsLogos d-xl-flex justify-content-between text-center mt-1">
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/bbb.webp')}}"/>
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/bbb.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/bbb.png')}}" class="lazyload" alt="BBB" />
                    </picture>
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/americian.webp')}}" />
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/americian.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/americian.png')}}" class="lazyload" alt="American Telemedicine" />
                    </picture>
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/hiipa.webp')}}" />
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/hiipa.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/hiipa.png')}}" class="lazyload" alt="American Telemedicine" />
                    </picture>
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/4.webp')}}" />
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/4.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/4.png')}}" class="lazyload" alt="American Telemedicine" />
                    </picture>
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/3.webp')}}" />
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/3.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/3.png')}}" class="lazyload" alt="American Telemedicine" />
                    </picture>
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/5.webp')}}" />
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/5.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/5.png')}}" class="lazyload" alt="American Telemedicine" />
                    </picture>
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/7.webp')}}" />
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/7.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/7.png')}}" class="lazyload" alt="American Telemedicine" />
                    </picture>
                    <picture>
                        <source type="image/webp" data-srcset="{{asset('public/forntend/img/trust/8.webp')}}" />
                        <source type="image/png" data-srcset="{{asset('public/forntend/img/trust/8.png')}}" />
                        <img src="{{asset('public/forntend/img/trust/8.png')}}" class="lazyload" alt="American Telemedicine" />
                    </picture>
                </div>
            </div>
        </section>

        <section class="benefitsBlock">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-6 col-lg-5 offset-lg-7 ">
                        <div class="benifitsHeading heading">
                            <h2 class="h2 my-4 text-black">Benefits of an ESA Letter</h2>
                            <p class="text-right  mt-5">If your pet provides you emotional support, you deserve all the benefits that come with an ESA letter. It's your right. Exercise it!</p>
                        </div>
                    </div>
                </div>
                <div class="allBenifites">
                    <div class="bgimage"></div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-4 col-lg-8 offset-lg-4 col-md-8 offset-md-4">
                            <div class="rightSide">
                                <div class="row row justify-content-end">
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                                        <div class="innerBox">
                                            <img class="img-fluid " src="{{asset('public/forntend/img/home/svg/travelincabin.svg')}}" class="lazyload img-fluid"/>
                                            <div class="text">Travel In-Cabin</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                                        <div class="innerBox">
                                            <img src="{{asset('public/forntend/img/home/svg/ManageCondition.svg')}}" class="lazyload img-fluid"/>
                                            <div class="text">Manage Condition</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                                        <div class="innerBox">
                                            <img src="{{asset('public/forntend/img/home/svg/RentalApartment.svg')}}" class="lazyload img-fluid"/>
                                            <div class="text">Rental Apartments</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-xl-5 mt-lg-4 mt-sm-5  row justify-content-end">
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                                        <div class="innerBox">
                                            <img src="{{asset('public/forntend/img/home/svg/Notraningrequired.svg')}}" class="lazyload img-fluid"/>
                                            <div class="text">No-Training Required</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                                        <div class="innerBox">
                                            <img src="{{asset('public/forntend/img/home/svg/Collage_dorms.svg')}}" class="lazyload img-fluid"/> 
                                            <div class="text">College Dorms</div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3">
                                        <div class="innerBox">
                                            <img src="{{asset('public/forntend/img/home/svg/NOadditionalCosy.svg')}}" class="lazyload img-fluid "/>
                                            <div class="text">No-Additional Costs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="competitorBlock my-xl-5 my-lg-5 my-md-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-4 ">
                        <div class="leftSide">
                            <div class="heading">
                                <h2 class="h2 my-4 text-black text-left">Why we're the best online ESA clinic available</h2>
                                <p class="text-left mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7  col-lg-8  col-md-12 ">
                        <div class="right_Side">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="card active">
                                        <div class="card-header text-center ">
                                            My ESA Doctor
                                        </div>
                                        <div class="card-body">
                                            <div class="googlePrice">
                                                <div class="text-left">
                                                    <p class="m-0">$99.99</p>
                                                </div>
                                                <div class="rightSide pl-3">
                                                    <p class="m-0 text-uppercase">actual cost</p>
                                                    <span>Advised Price on Google</span>
                                                </div>
                                            </div>
                                            <ul class="list">
                                                <li>
                                                    <p>Same Day</p>
                                                    <span class="green">Usually within 4 hours</span>
                                                </li>
                                                <li>
                                                    <p>Lowest Price</p>
                                                    <span class="green">Usually within 4 hours</span>
                                                </li>
                                                <li>
                                                    <p>Address Check</p>
                                                    <span>Real Medical Office ( EST 2001 )</span>
                                                </li>
                                                <li>
                                                    <p>Average Rating</p>
                                                    <span class="green">4.8/5 <a href="">View</a></span>
                                                </li>
                                                <li>
                                                    <p>BBB+ Rating</p>
                                                    <span class="green">A+</span>
                                                </li>
                                                <li>
                                                    <p>24/7 Support</p>
                                                    <span class="green">We are available 24/7 for you</span>
                                                </li>

                                            </ul>
                                            <a href="https://myesadoc.com/register?token=88905b1d0060cabddf10ea1be9eea08d" class="btn bt_n brdtheme mb-4 ml-5">Pre-Qualify Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mt-5">
                                    <div class="card">
                                        <div class="card-header text-center ">
                                            My ESA Doctor
                                        </div>
                                        <div class="card-body">
                                            <div class="googlePrice">
                                                <div class="text-left">
                                                    <p class="m-0">$99.99</p>
                                                </div>
                                                <div class="rightSide pl-3">
                                                    <p class="m-0 text-uppercase">actual cost</p>
                                                    <span>Advised Price on Google</span>
                                                </div>
                                            </div>
                                            <ul class="list">
                                                <li class="red">
                                                    <p>Same Day Rush Delivery</p>
                                                    <span class="red">In 4 hours($30 Extra</span>
                                                </li>
                                                <li>
                                                    <p>Lowest Price</p>
                                                    <span class="green">Guarantee</span>
                                                </li>
                                                <li>
                                                    <p>Address Check</p>
                                                    <span>No EST Dater Mentioned</span>
                                                </li>
                                                <li>
                                                    <p>Average Rating</p>
                                                    <span class="green">4.7/5 <a href="">View</a></span>
                                                </li>
                                                <li class="red">
                                                    <p>BBB+ Rating</p>
                                                    <span class="red">A+</span>
                                                </li>
                                                <li class="red">
                                                    <p>24/7 Support</p>
                                                    <span class="red">No Support</span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="easyEvaluationRecomm">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 p-0">
                        <div class="leftSide">
                            <div class="EER_numbers d-flex justify-content-between align-items-center">
                                <div class="digit">
                                    <p class="m-0">01</p>
                                </div>
                                <div class="textNumber">
                                    <p class="m-0">START WITH FILLING OUT A SIMPLE FORM</p>
                                    <span>Check-in to our online ESA clinic. Fill out a simple form with your medical details.</span>
                                </div>
                            </div>
                            <div class="EER_numbers d-flex justify-content-between align-items-center">
                                <div class="digit">
                                    <p class="m-0">02</p>
                                </div>
                                <div class="textNumber">
                                    <p class="m-0">SEE A MENTAL HEALTH PROFESSIONAL ONLINE</p>
                                    <span>Get evaluated by a licensed therapist via video chat/telemedicine. Have Face-to-Face consultation from anywhere.</span>
                                </div>
                            </div>
                            <div class="EER_numbers d-flex justify-content-between align-items-center">
                                <div class="digit">
                                    <p class="m-0">03</p>
                                </div>
                                <div class="textNumber">
                                    <p class="m-0">QUALIFY FOR A RECOMMENDATION</p>
                                    <span>Our mental health professional will then assess if you qualify for an Emotional Support Animal letter.</span>
                                </div>
                            </div>
                            <div class="EER_numbers d-flex justify-content-between align-items-center">
                                <div class="digit">
                                    <p class="m-0">04</p>
                                </div>
                                <div class="textNumber">
                                    <p class="m-0">GET YOUR ESA LETTER</p>
                                    <span>Receive your ESA letter via email in just 1 hour and hard copy via mail later. Our letters are accepted in all 50 states.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 offset-xl-3 col-lg-9 offset-lg-3 col-md-9 offset-md-3 ">
                        <div class="rightSide">
                            <div class="innerData">
                                <div class="benifitsHeading heading">
                                    <h2 class="h2 mb-4 text-black">Easy Evaluation & Recommendation</h2>
                                    <p class="text-left  mt-5">Get started now. The entire process can be done online or from your phone.
                                    </p>
                                </div>
                                <div class="formblock">
								
								  <div class="alert alert-danger print-error-msg" style="display:none">
													<ul></ul>
												</div>
                                    <form id="contactForm">
									{{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Name"  name="Name" placeholder="Full Name">
											 <div class="alert-message" id="nameError"></div>
											         <span class="text-danger">{{ $errors->first('Name') }}</span>

                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="Phone"  name="Phone" placeholder="Phone No">
											<div class="alert-message" id="mobileNumberError"></div>
											        <span class="text-danger">{{ $errors->first('Phone') }}</span>

                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="Email"  name="Email"  placeholder="Enter email">
											<div class="alert-message" id="emailError"></div>
											        <span class="text-danger">{{ $errors->first('Email') }}</span>

                                        </div>
                                        <div class="d-xl-flex d-lg-flex d-md-flex justify-content-between">
                                            <div class=" col-xl-12 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">I hereby certify that I am a patient, collective, patient's  and this is just an just legal acceptance of.</label>
                                            </div>
                                        </div>
                                        <div class="seondaryBtn d-xl-flex d-lg-flex d-md-flex justify-content-between align-items-center mt-4">
                                            <button  class="btn bt_n brdtheme" id="submit">CONTINUE</button>
											
                                            <picture>
                                                <source srcset="{{asset('public/forntend/img/home/img7.webp')}}" type="image/webp">
                                                <source srcset="{{asset('public/forntend/img/home/img7.png')}}" type="image/png"> 
                                                <img src="{{asset('public/forntend/img/home/img7.png')}}" class="lazyload" alt="Alt Text!">
                                            </picture>
                                        </div>
                                    </form>
									

								

                                           
	  
	  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-sec">
            <div class="container">
                <div class="circle"></div>
                <div class="circle1"></div>
                <div class="faq-block shadow">
                    <div class="row">
                        <div class="col-md-4 col-xl-3 faq-left">
                            <div class="faq-tab-left">
                                <div class="faq-head">
                                    <h2 class="h2">FAQ'sa</h2>
                                </div>
                                <div class="faq-btn">
                                    <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    <button class="button1"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button> <button class="button2"> <i class="fa fa-angle-down" aria-hidden="true"></i> </button>
                                </div>
                                <div class="faq-tabs">
                                    <ul class="nav nav-tabs">
                                        <li><a class="active show" data-toggle="tab" href="#faq-1"><span>Do I need to pay an extra fees for the ESA letter form?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-2"><span>How to get and emotional support animal(ESA) letter for housing?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-3"><span>How to tell if your emotional support animal letter is real?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-4"><span>Hot to get emotional support animal letter?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-5"><span>Do I need to enter my ESA Dog in dog registry?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-6"><span>Can a landlord deny an ESA letter for housing?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-7"><span>Is my pet an emotional support animal?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-8"><span>Can I take my ESA on a plane?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-9"><span>How to get ESA letter for cat?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-10"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-11"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-12"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-12"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-14"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-15"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-16"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-17"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-18"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-19"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                        <li><a data-toggle="tab" href="#faq-20"><span>Lorem Ipsum dolor sit amet?</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-9 faq-right">
                            <div class="tab-content">
                                <div id="faq-1" class="tab-pane fade show active">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-2" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                </div>
                                <div id="faq-3" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-4" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-5" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-6" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-7" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-8" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-9" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-10" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-11" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-12" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-13" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-14" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-15" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-16" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-17" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-18" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-19" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                                <div id="faq-20" class="tab-pane fade">
                                    <div class="heading">
                                        <h3 class="h3">Lorem Ipsum dolor sit amet?</h3>
                                    </div>
                                    <div class="faq-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="review-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="heading center text-center">
                            <h2 >What our customers are saying</h2>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 mt-4">
                        <div class="single-review card">
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <img src="{{asset('public/forntend/img/home/svg/star.svg')}}" class="lazyload " alt="Alt Text!">
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Excellent service &amp; support!!</h4>
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis, provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <div class="quot-icon">
                                    <picture>
                                        <source srcset="{{asset('public/forntend/img/home/quote.webp')}}" type="image/webp">
                                        <source srcset="{{asset('public/forntend/img/home/quote.png')}}" type="image/png"> 
                                        <img src="{{asset('public/forntend/img/home/quote.png')}}" class="lazyload" alt="Alt Text!">
                                    </picture>
                                </div>
                            </div>
                            <div class="reviewer media p-4">
                                <div class="reviewer-thumb">
                                    <picture>
                                        <source srcset="{{asset('public/forntend/img/home/avatar.webp')}}" type="image/webp">
                                        <source srcset="{{asset('public/forntend/img/home/avatar.png')}}" type="image/png"> 
                                        <img src="{{asset('public/forntend/img/home/avatar.png')}}" class="lazyload" alt="Alt Text!">
                                    </picture>
                                </div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5>Junaid Hasan</h5>
                                    <h6>CEO, Themeland</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mt-4">
                        <div class="single-review card">
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <img src="{{asset('public/forntend/img/home/svg/star.svg')}}" class="lazyload " alt="Alt Text!">
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Excellent service &amp; support!!</h4>
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis, provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <div class="quot-icon">
                                    <picture>
                                        <source srcset="{{asset('public/forntend/img/home/quote.webp')}}" type="image/webp">
                                        <source srcset="{{asset('public/forntend/img/home/quote.png')}}" type="image/png"> 
                                        <img src="{{asset('public/forntend/img/home/quote.png')}}" class="lazyload" alt="Alt Text!">
                                    </picture>
                                </div>
                            </div>
                            <div class="reviewer media p-4">
                                <div class="reviewer-thumb">
                                    <picture>
                                        <source srcset="{{asset('public/forntend/img/home/avatar.png')}}" type="image/webp">
                                        <source srcset="{{asset('public/forntend/img/home/avatar.png')}}" type="image/png"> 
                                        <img src="{{asset('public/forntend/img/home/avatar.png')}}" class="lazyload" alt="Alt Text!">
                                    </picture>
                                </div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5>Junaid Hasan</h5>
                                    <h6>CEO, Themeland</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 mt-4">
                        <div class="single-review card">
                            <div class="card-top p-4">
                                <div class="review-icon">
                                    <img src="{{asset('public/forntend/img/home/svg/star.svg')}}" class="lazyload " alt="Alt Text!">
                                </div>
                                <h4 class="text-primary mt-4 mb-3">Excellent service &amp; support!!</h4>
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis nam id facilis, provident doloremque placeat eveniet molestias laboriosam. Optio, esse.</p>
                                </div>
                                <div class="quot-icon">
                                    <picture>
                                        <source srcset="{{asset('public/forntend/img/home/quote.webp')}}" type="image/webp">
                                        <source srcset="{{asset('public/forntend/img/home/quote.png')}}" type="image/png"> 
                                        <img src="{{asset('public/forntend/img/home/quote.png')}}" class="lazyload" alt="Alt Text!">
                                    </picture>
                                </div>
                            </div>
                            <div class="reviewer media p-4">
                                <div class="reviewer-thumb">
                                    <picture>
                                         <source srcset="{{asset('public/forntend/img/home/avatar.png')}}" type="image/webp">
                                        <source srcset="{{asset('public/forntend/img/home/avatar.png')}}" type="image/png"> 
                                        <img src="{{asset('public/forntend/img/home/avatar.png')}}" class="lazyload" alt="Alt Text!">
                                    </picture>
                                </div>
                                <div class="reviewer-meta media-body align-self-center ml-4">
                                    <h5>Junaid Hasan</h5>
                                    <h6>CEO, Themeland</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="esaletterBlock my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="leftSide">
                            <picture>
                                <source srcset="{{asset('public/forntend/img/home/img1.webp')}}" type="image/webp">
                                <source srcset="{{asset('public/forntend/img/home/img1.png')}}" type="image/png"> 
                                <img src="{{asset('public/forntend/img/home/img1.png')}}" class="lazyload w-100" alt="Alt Text!">
                            </picture>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rightSide">
                            <div class="heading">
                                <h2 class="h2 my-4 text-black">What is an ESA letter</h2>
                                <p class="text-left mt-5">An ESA letter is a recommendation from a licensed physician who believes that an emotional support animal would help manage the patient’s mental health condition. ESAs are designed for people in stress. They offer companionship and constant support in the face of uncomfortable neurological conditions like PTSD, stress, depression, autism, bipolar, and more.</p>
                                <p class="m-0">The ESA letter allows you to live and fly with your emotional support animal without any hassles. For that, you need to get evaluated by a licensed medical health professional. The latter is valid for 12 months.</p>
                                <button type="button" class="btn bt_n brdtheme mt-4">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="getEsaLetter my-5 ">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-xl-5 col-lg-5 col-md-6 order-xl-1 order-lg-1 order-md-1 offset-1">
                        <div class="leftSide text-right">
                            <picture>
                                <source srcset="{{asset('public/forntend/img/home/getesaltttr.webp')}}" type="image/webp">
                                <source srcset="{{asset('public/forntend/img/home/getesaltttr.png')}}" type="image/png"> 
                                <img src="{{asset('public/forntend/img/home/getesaltttr.png')}}" class="w-100 lazyload w-100" alt="Alt Text!">
                            </picture>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rightSide">
                            <div class="heading">
                                <h2 class="h2 my-4 text-black">Who can get an ESA letter</h2>
                                <p class="text-left mt-5">Anyone suffering from a mental condition who believes in emotional support animal treatment can help them get the ESA letter without any hassles through telemedicine. Are you suffering from a mental condition. It is perfectly normal! Reach out to us and we can help you.</p>
                                <p>We have a team of licensed medical health professionals who are dedicated to helping every patient seeking help. If you have a mental health condition and believe your pet helps you manage it, we will happily assist you in every manner possible. We believe in providing quality healthcare at your convenience. Get your ESA letter and manage your condition effectively. </p>
                                <button type="button" class="btn bt_n brdtheme mt-3">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="howGetEsa">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="leftSide">
                            <picture>
                                <source srcset="{{asset('public/forntend/img/home/img3.webp')}}" type="image/webp">
                                <source srcset="{{asset('public/forntend/img/home/img3.png')}}" type="image/png"> 
                                <img src="{{asset('public/forntend/img/home/img3.png')}}" class="lazyload w-100" alt="Alt Text!">
                            </picture>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="rightSide">
                            <div class="heading">
                                <h2 class="h2 my-4 text-black">How to Get an ESA Letter?</h2>
                                <p class="text-left mt-5">In order to get an ESA letter conveniently without any hassles, choose telemedicine. The ESA letter must come from a certified mental health professional. These include psychiatric nurses, psychiatrists, psychologists, and other licensed therapists. Telemedicine has made the process a lot simpler and convenient than before. Let’s see how.Here’s how to get an ESA letter online: </p>
                                <p class="m-0">Here's how to get an ESA letter online</p>
                                <ol class="mt-3">
                                    <li class="p-0">Sign up register online with us.</li>
                                    <li class="p-0">Fill out a simple free prequalification form. This will take just  a few sdminutes.</li>
                                    <li class="p-0">Our doctor will contact you via video call and do your evaluation.</li>
                                    <li class="p-0">If approved, you will receive the ESA letter via email within a few minutes.</li>
                                </ol>
                                <button type="button" class="btn bt_n brdtheme mt-3">Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="well-renowned">
            <div class="pagebefore"></div>
            <div class="container">
                <div class="our_MV">
                    <div class="row align-items-center justify-content-xl-start justify-content-sm-center">
                        <div class="col-xl-7">
                            <div class="innerMV_text">
                                <span class="mb-3">Established in 2001</span>
                                <div class="ourMV">
                                    <h3 class="h3 pb-2 float-left w-100 ptzero mt-4">My ESA Doctor is <span class="span"> well-renowned </span> for their licensed <span class="span" >compassionate physicians and mental health professionals </span></h3>
                                    <p>The aim of My ESA Doctor is to provide the highest standard of emotional and psychology care to every patient seeking help. Whether you need an ESA letter to rent an apartment or house with your ESA or you want to fly with your ESA, our licensed medical health therapists will evaluate your emotional or mental condition and then issue a legitimate ESA letter if appropriate. Note: you do not need to enter into any dog registry, the ESA Letter is all you need.Our goal to help patients live and travel with their ESAs is what draws people from all walks of life to My ESA Doctor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <picture>
                                            <source srcset="{{asset('public/forntend/img/home/clinic/hosOne.webp')}}" type="image/webp">
                                            <source srcset="{{asset('public/forntend/img/home/clinic/hosOne.png')}}" type="image/png"> 
                                            <img src="{{asset('public/forntend/img/home/clinic/hosOne.png')}}" class="lazyload w-100 " alt="Alt Text!">
                                        </picture>
                                    </div>
                                    <div class="carousel-item">
                                        <picture>
                                            <source srcset="{{asset('public/forntend/img/home/clinic/hosTwo.webp')}}" type="image/webp">
                                            <source srcset="{{asset('public/forntend/img/home/clinic/hosTwo.png')}}" type="image/png"> 
                                            <img src="{{asset('public/forntend/img/home/clinic/hosTwo.png')}}" class="lazyload w-100 " alt="Alt Text!">
                                        </picture>
                                    </div>
                                    <div class="carousel-item">
                                        <picture>
                                            <source srcset="{{asset('public/forntend/img/home/clinic/hosThree.webp')}}" type="image/webp">
                                            <source srcset="{{asset('public/forntend/img/home/clinic/hosThree.png')}}" type="image/png"> 
                                            <img src="{{asset('public/forntend/img/home/clinic/hosThree.png')}}" class="lazyload w-100 " alt="Alt Text!">
                                        </picture>
                                    </div>
                                </div>
                                <div class="errowLR">
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="emotionalSupportBlock">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support leftSide">
                            <picture>
                                <source srcset="{{asset('public/forntend/img/home/emospt.webp')}}" type="image/webp">
                                <source srcset="{{asset('public/forntend/img/home/emospt.png')}}" type="image/png"> 
                                <img src="{{asset('public/forntend/img/home/emospt.png')}}" class="lazyload w-100" alt="Alt Text!">
                            </picture>  
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support rightSide">
                            <div class="heading">
                                <h2 class="h2 my-4 text-left">Does your pet provide you with emotional support? </h2>
                                <p class="text-left mt-5">Did you know that if your pet plays a pivotal part of your mental health, the laws protect you both. If they provide you with emotional support to manage anxiety, depression or other mental illness you have rights and so do your pets; ESA Letter provides you the benefit to make your pet as Emotional Support Pet. We are here to educate you, empower you & enable you on these rights. We make sure that you learn your rights and exercise them too.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-area">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="heading center text-center">
                            <h2 >Why an ESA letter from My ESA Doctor </h2>
                            <p class="mt-4">Make the most out of your <b> ESA Evaluation</b> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="image-box p-5 text-center">
                            <div class="featured-img mb-3">
                                <img class="img-fluid" src="{{asset('public/forntend/img/home/svg/legal.svg')}}" alt="">
                            </div>
                            <div class="icon-text">
                                <h3 class="mb-2 h3">LEGAL</h3>
                                <p>Our compassionate physicians and mental health professionals recommend 100% genuine <a href="https://myesadoctor.com">Emotional Support Animal letters</a> in accordance with federal laws allowing patients access to air travel &amp; housing with their pet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="image-box p-5 text-center">
                            <div class="featured-img mb-3">
                                <img class="img-fluid" src="{{asset('public/forntend/img/home/svg/secure.svg')}}" alt="">
                            </div>
                            <div class="icon-text">
                                <h3 class="mb-2 h3">SECURE</h3>
                                <p>You never need to worry about privacy with us as all your data is private and secure in compliance with HIPAA guidelines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="image-box p-5 text-center">
                            <div class="featured-img mb-3">
                                <img class="img-fluid" src="{{asset('public/forntend/img/home/svg/housing.svg')}}" alt="">
                            </div>
                            <div class="icon-text">
                                <h3 class="mb-2 h3">HOUSING</h3>
                                <p><strong>Average pet fees range from $200 – $500</strong>, and pet deposits average $200 or more. By <a href="https://myesadoctor.com/what-are-emotional-support-animal-laws/">ESA laws</a>, a landlord <strong>can’t charge&nbsp;</strong>this if you have an ESA letter for housing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="image-box p-5 text-center">
                            <div class="featured-img mb-3">
                                <img class="img-fluid" src="{{asset('public/forntend/img/home/svg/flying.svg')}}" alt="">
                            </div>
                            <div class="icon-text">
                                <h3 class="mb-2 h3">FLYING</h3>
                                <p>With an ESA recommendation, you pay nothing extra when flying domestic and your pet also sits with you. <strong>Save an average of $125 per flight with an <a href="https://myesadoctor.com/">ESA letter</a> alone.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="image-box p-5 text-center">
                            <div class="featured-img mb-3">
                                <img class="img-fluid" src="{{asset('public/forntend/img/home/svg/affordable.svg')}}" alt="">
                            </div>
                            <div class="icon-text">
                                <h3 class="mb-2 h3">AFFORDABLE</h3>
                                <p>For only <strong>$99.99</strong> a year, you get to live and fly with your pet at no extra cost. We have made the process simple and affordable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="image-box p-5 text-center">
                            <div class="featured-img mb-3">
                                <img class="img-fluid" src="{{asset('public/forntend/img/home/svg/convenient.svg')}}" alt="">
                            </div>
                            <div class="icon-text">
                                <h3 class="mb-2 h3">CONVENIENT</h3>
                                <p>You can easily get an <a href="https://myesadoctor.com/">Emotional Support Animal letter</a> from the comfort of your home. The online process is streamlined to be simple and quick.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="wellBehavedESA">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="dogBreadIcon position-relative">
                            <div class="imageOne common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog1.png')}}" class=""/>
                                </a>
                            </div>
                            <div class="imageT common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog2.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageTh common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog3.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageFour common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog4.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageFive common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog5.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageSix common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog6.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageSeven common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog7.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageEight common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/D5.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageNine common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/Dog9.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                            <div class="imageTen common">
                                <a href="#0" title="PitBil">
                                    <img src="{{asset('public/forntend/img/home/svg/dogs/D9.png')}}" class=" w-100" title="PitBil"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="rightSide">
                            <div class="heading">
                                <h2 class="h2 my-4 text-black text-left">Why is it important to have a well-behaved ESA?</h2>
                            </div>
                            <p class="mt-5 ">
                                While we understand and fully support the use of emotional support animals for therapy, we highly recommend all our patients to trains their dogs. It is important that your ESA does not cause any damage, fear or injuries to the people or environment that they are in. When it comes to finding the right breed to assist you with your mental well-being, always choose a breed that isn't aggressive or dangerous in nature. It is more likely that a well-behaved dog will not cause you any trouble or embarrassment.<br> 
                                For housing letters we review every pet breed separately keeping in mind their size, temperament, place of rent etc. Contrary to this, when it comes to airline letters our doctors only approve certain breeds as most airlines will reject your big or aggressive dog. The final decision of allowing your dog on a house rental or an airline is always up to the landlord or the airline company that you fly with. Thus, an ESA letter is not a guarantee that you will be able to live and fly with your pet. The mental health professional's recommendation is their professional opinion in writing about using your pet as an aid to manage your mental health condition.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="provideEmotionalSupport">
            <div class="container">
                <div class="heading center">
                    <h2 class="h2 my-4 text-black text-center">Why we're the best online </br>ESA clinic available</h2>
                </div>
                <div class="petsSupports">
                    <div class="row">
                        <div class="col-xl-3 col-lg col-md-6">
                            <div class="innerBlocks p-3  my-3">
                                <picture>
                                    <source srcset="{{asset('public/forntend/img/home/championship.webp')}}" type="image/webp">
                                    <source srcset="{{asset('public/forntend/img/home/championship.png')}}" type="image/png"> 
                                    <img src="{{asset('public/forntend/img/home/championship.png')}}" class="lazyload w-100 " alt="Alt Text!">
                                </picture>
                                <div class="pets_S_Text">
                                    <h3 class="h3">Companionship</h3>
                                    <p class="pt-3">Where loneliness and isolation can trigger symptoms of mental conditions like depression and stress, having a companion with you can help prevent these conditions and add more years in your life. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg col-md-6">
                            <div class="innerBlocks p-3 my-3">
                                <picture>
                                    <source srcset="{{asset('public/forntend/img/home/excersize.webp')}}" type="image/webp">
                                    <source srcset="{{asset('public/forntend/img/home/excersize.png')}}" type="image/png"> 
                                    <img src="{{asset('public/forntend/img/home/excersize.png')}}" class="lazyload w-100 " alt="Alt Text!">
                                </picture>
                                <div class="pets_S_Text">
                                    <h3 class="h3">Exercise</h3>
                                    <p class="pt-3">Having a pet means you will have to exercise. They make you fitter and healthier. Take a walk or have a game of ball with them, exercise will fit into your routine without your knowledge. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg col-md-6">
                            <div class="innerBlocks p-3  my-3  mt-xl-3 mt-lg-3 mt-md-5">
                                <picture>
                                    <source srcset="{{asset('public/forntend/img/home/social-behaviour.webp')}}" type="image/webp">
                                    <source srcset="{{asset('public/forntend/img/home/social-behaviour.png')}}" type="image/png"> 
                                    <img src="{{asset('public/forntend/img/home/social-behaviour.png')}}" class="lazyload w-100 " alt="Alt Text!">
                                </picture>
                                <div class="pets_S_Text">
                                    <h3 class="h3">Social Behavior </h3>
                                    <p class="pt-3">Pets help you meet people. Emotional support animals can manage your social anxiety and act as your social lubricant. A walk with your pet will help you talk with other pet owners.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg col-md-6">
                            <div class="innerBlocks p-3  my-3 mt-xl-3 mt-lg-3 mt-md-5">
                                <picture>
                                    <source srcset="{{asset('public/forntend/img/home/vitality.webp')}}" type="image/webp">
                                    <source srcset="{{asset('public/forntend/img/home/vitality.png')}}" type="image/png"> 
                                    <img src="{{asset('public/forntend/img/home/vitality.png')}}" class="lazyload w-100 " alt="Alt Text!">
                                </picture>
                                <div class="pets_S_Text">
                                    <h3 class="h3">Vitality </h3>
                                    <p class="pt-3">Stop the aging by having a pet in your life. They can help you overcome the barriers associated with the growing age. They exhibit positive energies and make you feel better and younger. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="map">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 rightSide">
                        <div class="heading">
                            <h2 class="h2 my-4 text-left">Hapy Pet owners!</h2>
                            <p class="text-left  mt-5">Across the United States</p>
                            <div class="big">
                                32,183+
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 ">
                        <picture>
                            <source srcset="{{asset('public/forntend/img/home/map.webp')}}" type="image/webp">
                            <source srcset="{{asset('public/forntend/img/home/map.png')}}" type="image/png"> 
                            <img src="{{asset('public/forntend/img/home/map.png')}}" class="img-fluid lazyload" alt="Alt Text!">
                        </picture>
                    </div>
                </div>
            </div>
        </section>


        <section class="section subscribe-area ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="text-center">
                            <h2 class="h3">Subscribe to get updates</h2>
                            <p class="my-4">By subscribing you will get newsleter, promotions adipisicing elit. Architecto beatae, asperiores tempore repudiandae saepe aspernatur unde voluptate sapiente quia ex.</p>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <button type="submit" class="btn bt_n brdtheme">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
	 @include('frontend.layout.footer')
	 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

	 <meta name="csrf-token" content="{{ csrf_token() }}" />

									   <script type="text/javascript"> 
									   $(document).ready(function() {
										$('#contactForm').on('submit',function(event){
											event.preventDefault();
                                            var token  = $('meta[name="csrf-token"]').attr('content');
											var Name = $('#Name').val(); 
											var Email = $('#Email').val(); 
											var Phone = $('#Phone').val();
											
											$.ajax({
										
											 url:  "http://localhost/myesa/public/sendemail/send",
											  type:"post",
											  data:{
												"_method": 'POST',
                                                "_token": token,
												"Name":Name,
												"Email":Email,
												"Phone":Phone, 
											  },
                                              dataType: 'json',
											 success: function(data) {
														if($.isEmptyObject(data.errors)){
															alert(data.success); 
                                              window.location.href = ('https://myesadoc.com/register?token=88905b1d0060cabddf10ea1be9eea08d');
           
														}else{
															printErrorMsg(data.errors);
														}
													}
											 });
											 });
											  function printErrorMsg (msg) {
													$(".print-error-msg").find("ul").html('');
													$(".print-error-msg").css('display','block');
													$.each( msg, function( key, value ) {
														$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
													});
												}
		
											});
										  </script>