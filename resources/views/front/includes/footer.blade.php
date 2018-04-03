<footer id="footer" class="footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                <div class="main-footer">


                    <div class="social">
                        @foreach($publishedClients as $publishedClient)

                        <a href="{{$publishedClient->cc_link}}" target="_blank"><i class="{{$publishedClient->cc_icon}}"></i></a>


                    @endforeach
                    </div>

                    <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> Khorshed Alam </a>2018. All rights reserved.</p>

                </div>
            </div>
        </div>
    </div>

</footer>