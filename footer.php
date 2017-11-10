<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-lg-offset-1">
                <div class="footer-wid">
                    <img src="img/Section-C4A.png" height="50px">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="footer-wid">
                    <p>Section C-4A serves Arrowmen in northeast Ohio and northern West Virginia comprising Cuyahoga,
                        Onondaga, Wapashuwi, Marnoc, Sipp-O and Portage Lodges.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="copyright-text">
                                <p>© 2017 Section C-4A, Order of the Arrow, Boy Scouts of America</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-links footer-social-links">
                                <a class="btn social-link" href="http://www.facebook.com/oac4a" target="_blank"><i class="fa fa-facebook"></i>
                                    <div class="ripple-wrapper"></div>
                                </a>
                                <!--<a class="btn social-link" href="javascript:void(0)"><i class="fa fa-twitter"></i> <div class="ripple-wrapper"></div></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/material.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/ripples.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.scrolly.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.particleground.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/countdown.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/functions.js"></script>

<script>
    $(function(){
        function updateLiveRegStats(){
            $.getJSON('https://events.oa-c4a.org/api/stats', function(data, textStatus, jqXHR){
                var $regStats = $('#regStats');
                var $tbody     = $regStats.find('tbody');
                $tbody.find('tr').remove();
                $.each(data.lodges, function(i, lodge){
                    $tbody.append(
                        '<tr>' +
                        '<td>' + lodge.name + '</td>' +
                        '<td>' + lodge.count + '</td>' +
                        '</tr>'
                    );
                });

                $tbody.append(
                    '<tr>' +
                    '<td>Other Lodges</td>' +
                    '<td>' + data.otherLodges + '</td>' +
                    '</tr>'
                );

                $('#totalRegCount').html(data.total);
                $regStats.show();
            });
            setTimeout(updateLiveRegStats, 5000);
        }

        updateLiveRegStats();
    });
</script>

<!-- better contact form -->
<script type="text/javascript">
    /* var bcf_settings = { buttonText:'Contact Us', buttonTop:'30%', language:'en_US' }; // Better Contact Form Settings */
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        js          = d.createElement(s);
        js.id       = id;
        js.src      = "//bettercontactform.com/contact/media/8/3/830b0a68f54de7c5e8fe1da2f9a566cdb3916e75.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, "script", "bcf-render"));
</script>
<a id="bcf_trigger" href="http://bettercontactform.com" rel="bcf_trigger">Contact Form</a>
<?php wp_footer(); ?> 
</body>