<!-- Boostrap stylesheet -->
{{ Html::style('assets/css/bootstrap.min.css') }}

<!-- Icon Font CSS -->
{{ Html::style('assets/css/ionicons.min.css?v=1003') }}
{{ Html::style('assets/css/font-awesome.min.css') }}
{{ Html::style('assets/css/pe-icon-7-stroke.css') }}

<!-- Plugins stylesheet -->
{{ Html::style('assets/css/plugins.css') }}

<!-- Master stylesheet -->
{{ Html::style('assets/css/style.css') }}

<!-- Responsive stylesheet -->
{{ Html::style('assets/css/responsive.css') }}


@yield('stylesheet')

<style type="text/css">
    [data-notify="progressbar"] {
    	margin-bottom: 0px;
    	position: absolute;
    	bottom: 0px;
    	left: 0px;
    	width: 100%;
    	height: 5px;
    }
    
    @yield('stylesheet_inline')
</style>