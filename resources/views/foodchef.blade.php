 <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Penyewaan</h6>
                        <h2>Kami menyediakan Fasilitas Hiburan</h2>
                    </div>
                </div>
            </div>

           

            <div class="row">

                 @foreach($data2 as $data2)

                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="{{url('https://api.whatsapp.com/send?phone=6282278408279&text=Saya%20ingin%20menyewa%20')}}"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                            <img height="200" width="200" src="chefimage/{{$data2->image}}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>{{$data2->name}}</h4>
                            <span>{{$data2->speciality}}</span>
                        </div>
                    </div>
                </div>


                @endforeach
            
               
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->