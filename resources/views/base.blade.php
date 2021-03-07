<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<link rel="stylesheet" href="{{ asset('css/colors/blue.css')}}">

</head>

<body>
    @yield('body')
    <div class="dashboard-footer-spacer"></div>
    <div class="small-footer margin-top-15">
        <div class="small-footer-copyrights">
            © 2019 <strong>Hireo</strong>. All Rights Reserved.
        </div>
        <ul class="footer-social-links">
            <li>
                <a href="#" title="Facebook" data-tippy-placement="top">
                    <i class="icon-brand-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Twitter" data-tippy-placement="top">
                    <i class="icon-brand-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Google Plus" data-tippy-placement="top">
                    <i class="icon-brand-google-plus-g"></i>
                </a>
            </li>
            <li>
                <a href="#" title="LinkedIn" data-tippy-placement="top">
                    <i class="icon-brand-linkedin-in"></i>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- Footer / End -->

</div>
</div>
</div>
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('js/jquery-migrate-3.1.0.min.html')}}"></script>
    <script src="{{ asset('js/mmenu.min.js')}}"></sc)ript>
    <script src="{{ asset('js/tippy.all.min.js')}}"></script>
    <script src="{{ asset('js/simplebar.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-slider.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('js/snackbar.js')}}"></script>
    <script src="{{ asset('js/clipboard.min.js')}}"></script>
    <script src="{{ asset('js/counterup.min.js')}}"></script>
    <script src="{{ asset('js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/slick.min.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    
    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() { 
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        }); 
    }); 
    </script>
    
    
    <!-- Google Autocomplete -->
    <script>
        function initAutocomplete() {
             var options = {
              types: ['(cities)'],
              // componentRestrictions: {country: "us"}
             };
    
             var input = document.getElementById('autocomplete-input');
             var autocomplete = new google.maps.places.Autocomplete(input, options);
        }
    
        // Autocomplete adjustment for homepage
        if ($('.intro-banner-search-form')[0]) {
            setTimeout(function(){ 
                $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
            }, 300);
        }
    
    </script>
    
    <!-- Google API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>
    
    </body>
    
    <!-- Mirrored from www.vasterad.com/themes/hireo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2021 07:25:50 GMT -->
    </html>