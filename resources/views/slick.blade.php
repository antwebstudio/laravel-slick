{!! $content !!}

@js(url('vendor/slick/slick.min.js'))
@css(url('vendor/slick/slick.css'))
@css(url('vendor/slick/slick-theme.css'))
@js
  $('[data-slick]').slick();
@endjs