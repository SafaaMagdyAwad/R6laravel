<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tooplate's Little Fashion - Products</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}"/>

        <link href="{{asset('assets/css/tooplate-little-fashion.css')}}" rel="stylesheet">
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <strong><span>Little</span> Fashion</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.html">Story</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="products.html">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="faq.html">FAQs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                            <a href="product-detail.html" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Choose your</span>
                                <span class="d-block text-dark">favorite stuffs</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="products section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12">
                            <h2 class="mb-5">New Arrivals</h2>
                        </div>

                        <label hidden> {{$i=0;}}</label>
                        @foreach ($products as $product)
                            @if ($i<3)

                                <div class="col-lg-4 col-12">
                                    <div class="product-thumb">
                                        <a href="product-detail.html">
                                            <img src="{{asset('assets/images/'.$product->image)}}" class="img-fluid product-image" alt="">
                                        </a>
    
                                        <div class="product-top d-flex">
                                            <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                        </div>
    
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">
                                                    <a href="product-detail.html" class="product-title-link">{{$product->title}}</a>
                                                </h5>
    
                                                <p class="product-p"> {{$product->discription}}  </p>
                                            </div>
    
                                            <small class="product-price text-muted ms-auto">${{$product->price}}</small>
                                        </div>
                                    </div>
                                </div>




                            <label hidden> {{$i++;}}</label>

                            
                                
                            @endif
                        @endforeach

                        <div class="col-12">
                            <h2 class="mb-5">Popular</h2>
                        </div>

                        @foreach ($products as $product)
                            
                            <div class="col-lg-4 col-12">
                                <div class="product-thumb">
                                    <a href="product-detail.html">
                                        <img src="{{asset('assets/images/'.$product->image)}}" class="img-fluid product-image" alt="">
                                    </a>

                                    <div class="product-top d-flex">
                                        <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                    </div>

                                    <div class="product-info d-flex">
                                        <div>
                                            <h5 class="product-title mb-0">
                                                <a href="product-detail.html" class="product-title-link">{{$product->title}}</a>
                                            </h5>

                                            <p class="product-p"> {{$product->discription}}  </p>
                                        </div>

                                        <small class="product-price text-muted ms-auto">${{$product->price}}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                      
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.html">Little</a> Fashion</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Little Fashion</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/Headroom.js')}}"></script>
        <script src="{{asset('assets/js/jQuery.headroom.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>

    </body>
</html>
