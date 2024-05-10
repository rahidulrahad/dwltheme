<?php get_header(); 
/* Template Name: Template contact */
?>

        <div class="tm-contact-img-container">
            
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Pellentesque fermentum mauris</h3>
                            <p class="tm-form-description">Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien. Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi. Fusce vitae dapibus justo.</p> 


                            <form action="index.html" method="post" class="tm-contact-form">                                
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                </div>
                            
                                <button type="submit" class="tm-btn">Submit</button>                          
                            </form>   
                        </section>
                        
                        <section class="tm-margin-t-mid tm-map-section">
                            <h3 class="tm-gold-text tm-form-title">Pellentesque fermentum mauris</h3>

                            <div id="google-map"></div>

                            <p class="tm-form-description">Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id.</p>

                            <p class="m-b-0">Donec mattis ipsum in erat viverra commodo. 
                                Proin sapien lacus, euismod eget nisl in, 
                                elementum posuere massa. Curabitur a odio
                                eros. Cras aliquam lectus erat, non semper est
                                volutpat eget. Ut eget erat tincidunt.</p>

                            <a href="#" class="tm-btn tm-margin-t-small">Detail</a> 
                        </section>                        
                 

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-contact-right">
                        
                        <div class="row">
                            
                        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>            
                        <?php endif; ?>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        
 <script>     

    /* Google map
    ------------------------------------------------*/
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(13.758468,100.567481),
            scrollwheel: false
        };
    
        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });
    
        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
    }

    // DOM is ready
    $(function() {

        // Google Map
        loadGoogleMap();
    });

</script>             
<?php get_footer();?>