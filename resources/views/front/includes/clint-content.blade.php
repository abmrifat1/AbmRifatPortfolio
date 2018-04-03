<section id="testimonial" class="lightbg">
    <div class="container">

        <br>
        <h1 class="text-center text-success">Client Reviews</h1>

        <!-- Example row of columns -->
        <div class="row">
            <div class="testimonial-wrapper sections4">
              @foreach($publishedClients as $publishedClient)
                <div class="col-md-4 col-sm-4 col-xs-4">

                    <div class="testimonial-content text-left">

                        <img src="{{asset($publishedClient->image)}}" alt="testimonial" width="250" height="300"/>
                        <hr/>

                        <div class="testimonial-quote">

                            <p>{{$publishedClient->description}}</p>
                        </div>

                        <div class="regards-by">
                            <h5>{{$publishedClient->name}}</h5>
                            <p>{{$publishedClient->designation}}</p>
                        </div>
                        <br>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div> <!-- /container -->
</section>
