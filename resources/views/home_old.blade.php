@extends('layouts.main')
@section('css')

	
@endsection


@section('container')
<div id="carouselExampleFade" class="carousel slide carousel-fade mt-5" data-ride="carousel">
  <div class="carousel-inner " >
    <div class="carousel-item active">
      <img class="d-block w-100 " class="wow fadeInUp" data-wow-delay="0.1s" src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg"
        alt="First slide" >
         <div class="carousel-caption" style="margin-bottom: 50px;">
  <div class="container">
  <div class="row align-items-center justify-content-center">

    
    <div class="col-md-8 mt-lg-1 text-center">
      <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
      
      <div data-aos="fade-up" data-aos-delay="100">
        <a href="{{ url('/contact') }}" class="btn smoothscroll btn-secondary mr-2 mb-5">Get In Touch</a>
      </div>
    </div>
      
  </div>
</div>
<br>
<br>
<a href="#why-us" class="  mouse smoothscroll">
  <span class="mouse-icon bg-primary">
    <span class="mouse-wheel"></span>
  </span>
</a>
</div>  
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " class="wow fadeInUp" data-wow-delay="0.1s" src="{{url('images/hajj-1.jpg')}}"
        alt="Second slide" style="height:600px;" >
         <div class="carousel-caption" style="margin-bottom: 50px;">
    <div class="container">
  <div class="row align-items-center justify-content-center">

    
    <div class="col-md-8 mt-lg-1 text-center">
      <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
      
      <div data-aos="fade-up" data-aos-delay="100">
        <a href="{{ url('/contact') }}" class="btn smoothscroll btn-secondary mr-2 mb-5">Get In Touch</a>
      </div>
    </div>
      
  </div>
</div>
<br>
<br>
<a href="#why-us" class="mouse smoothscroll">
  <span class="mouse-icon bg-primary">
    <span class="mouse-wheel"></span>
  </span>
</a>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" class="wow fadeInUp" data-wow-delay="0.1s" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg"
        alt="First slide"  >
         <div class="carousel-caption" style="margin-bottom: 50px;">
     <div class="container">
  <div class="row align-items-center justify-content-center">

    
    <div class="col-md-8 mt-lg-1 text-center">
      <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
      
      <div data-aos="fade-up" data-aos-delay="100">
        <a href="{{ url('/contact') }}" class="btn smoothscroll btn-secondary mr-2 mb-5">Get In Touch</a>
      </div>
    </div>
      
  </div>
</div>
<br>
<br>
<a href="#why-us" class="  mouse smoothscroll">
  <span class="mouse-icon bg-primary">
    <span class="mouse-wheel"></span>
  </span>
</a>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<!-- Our happy clients -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="col-xs-12 col-sm-6 col-md-4">

    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>



                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>


@endsection