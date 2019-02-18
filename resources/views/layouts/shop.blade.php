<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <!-- Start of Metatags -->
        @include('layouts.vendor.core.assets.metatags')
        <!-- End of Metatags -->
        
        <!-- Start of Stylesheets -->
        @include('layouts.vendor.core.assets.stylesheet')
        <!-- End of Stylesheets -->
        
        <!-- Start of Javascript Top -->
        @include('layouts.vendor.core.assets.javascript_top')
        <!-- End of Javascript Top -->
    </head>
    
    <body>
    
        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
        <![endif]-->
    
        <!-- Start of Whole Site Wrapper with mobile menu support -->
        <div id="whole" class="whole-site-wrapper">
            
            <!-- Start of Header -->
            @include('layouts.vendor.core.html.header.index')
            <!-- End of Header -->
    
            <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->
            
            <!-- Start of Breadcrump -->
            @yield('breadcrumb')
            <!-- End of Breadcrump -->
    
            <!-- Start of Main Content Wrapper -->
            <main id="content" class="main-content-wrapper">
                
                <!-- Start of Content --> 
                @yield('content')
                <!-- End of Content --> 
                
            </main>
            <!-- End of Main Content Wrapper -->
    
            <!-- Start of Footer -->
            @include('layouts.vendor.core.html.footer.index')
            <!-- End of Footer -->
    
            <!-- Quick View Content Start -->
            @include('layouts.vendor.core.html.quick_view')
            <!-- Quick View Content End -->
    
            <!-- Start of Scroll to Top -->
            <div id="to_top">
                <i class="ion ion-ios-arrow-forward"></i>
                <i class="ion ion-ios-arrow-forward"></i>
            </div>
            <!-- End of Scroll to Top -->
        </div>
        <!-- End of Whole Site Wrapper -->
    
        <!-- Initializing Photoswipe -->
        @include('layouts.vendor.core.html.photoswipe')
        <!-- End of Photoswipe -->
    
    
        <!-- Start of Javascript -->
        @include('layouts.vendor.core.assets.javascript')
        <!-- End of Javascript -->
        
    </body>
</html>