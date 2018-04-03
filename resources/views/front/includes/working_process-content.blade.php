<section id="features" class="sections lightbg">

    <div class="heading-content text-center">
        <h1>My Working Process</h1>
        <p>Hi, i’m Rifat, Experience Crafter from Bangladesh.</p>
    </div>

    <div class="container text-center">
        <!-- Example row of columns -->
        <div class="row">
            @foreach($publishedWorks as $publishedWork)
            <div class="features-wrapper">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-bg design">

                        <div class="features-item">
                            <i class="{{$publishedWork->wp_icon}}"></i>
                            <h6><a href="#">{{$publishedWork->wp_title}}</a></h6>
                        </div>

                    </div>
                </div>

             </div>
            @endforeach
        </div>
    </div> <!-- /container -->
</section>