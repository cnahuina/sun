    <script type="text/javascript">
        var userFeed = new Instafeed({
            get: 'user',
            userId: '3292346986',
            clientId: '0af22df9b39c40c39e7d9323dd232386',
            accessToken: '3292346986.1677ed0.78623f44ceb14fc3ad815cf9e8aca4e8',
            resolution: 'standard_resolution',
            template: '<div class="single-insta-feedAPI"><a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a></div>',
            sortBy: 'most-recent',
            limit: 24,
            links: false
            });
            userFeed.run();
    </script>
<div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5>Síguenos en Instragram @suntimestore</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel">
            <!-- ##### Instagram Feed Area start ##### -->
            <div id="instafeed"></div>
            <!-- ##### Instagram Feed Area End ##### -->
        </div>
    </div>