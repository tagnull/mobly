{{ Html::script('assets/js/modernizr-2.8.3.min.js') }}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56300875-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-56300875-6');
  gtag('set', {'user_id': '{{-- auth()->user()->uuid --}}'});
</script>