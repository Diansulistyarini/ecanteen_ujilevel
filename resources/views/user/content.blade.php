<section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Featured Menu</span>
        <h2 class="mb-4">Our Menu</h2>
        <p>Healthy snacks and very affordable prices</p>
      </div>
    </div>   		
    </div>
    <div class="container">
        <div class="row">
            @foreach ($menus as $a)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset ('image/'. $a->image)}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    
                        
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$a->menu_name}} </a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span>{{$a->price}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                {{-- <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 

            

            <div class="container" style="margin-left: 300px">
            <h3 style="margin-left: 80px">Video About Snacks for School</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/D-EpUo3lGIs" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>