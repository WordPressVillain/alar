<div class="row h-100 align-items-center m-0">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <p class="text-center">
      @php the_content() @endphp
    </p>
  </div>
  <div class="col-lg-2"></div>
  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>

