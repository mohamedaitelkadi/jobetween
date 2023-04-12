@extends('navbar')
@Section('content')
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Showcase your app beautifully.</h1>
                            <p class="lead fw-normal text-muted mb-5">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p>
                            <a class="btn btn-outline-dark py-3 px-4 rounded-pill" href="">Sign up Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <div class="device-wrapper">
                                
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-white">
                                        <img src="img/plumber-making-phone-gesture-removebg.png" style="height: 100%;" alt="">
                                        <!-- <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="assets/img/demo-screen.mp4" type="video/mp4" /></video> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"An intuitive solution to a common problem that we all face, wrapped up in a single app!"</div>
                        <h2>JoBetween</h2>
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-droplet icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Plumbing</h3>
                                        <p class="text-muted mb-0">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-lightning-charge-fill icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Electricity</h3>
                                        <p class="text-muted mb-0">Put an image, video, animation, or anything else in the screen!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-paint-bucket icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Painting</h3>
                                        <p class="text-muted mb-0">As always, this theme is free to download and use for any purpose!</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-three-dots icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">And Others</h3>
                                        <p class="text-muted mb-0">Since this theme is MIT licensed, you can use it commercially!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-white">
                                        <img src="img/plumber-with-thumb-up.jpg" style="height: 90%;margin-top: 34px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        
        
  @endSection