<section id="portfolio" class="sections">
    <div class="container">

        <div class="heading-content text-center">
            <h3>My Latest Works</h3>
            <p>Hi, i’m Rifat, Experience Crafter from Bangladesh.</p>
        </div>

        <!-- Example row of columns -->
        <div class="row">
            <div class="portfolio-wrapper">

             @foreach($publishedWorks as $publishedWork)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="portfolio-item">
                        <a href="{{asset($publishedWork->lw_image)}}" class="portfolio-img"><img src="{{asset($publishedWork->lw_image)}}" alt=""/></a>
                    </div>
                </div>

             @endforeach
            </div>
        </div>

    </div> <!-- /container -->
</section>
