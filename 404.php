<?php get_header(); ?>
<meta name="robots" content="noindex,follow" />

<main class="container w-100 min-vh-100 d-flex align-items-center justify-content-center">

	<div class="d-flex align-items-center justify-content-center flex-column">
		<img
		 src="<?php echo get_template_directory_uri(); ?>/common/images/logo.svg"
		 style="width:clamp(150px, 100%, 200px);"
		 class="mb-3"
		 >
		<h1 class="h1 mb-1 font-weight-bold">ページが見つかりません</h1>
		<p><span id="sec">5</span> 秒後にトップページへ移動します</p>
	</div>

</main>

<script>
(function () {
  var isBot = /bot|crawler|spider|crawling/i.test(navigator.userAgent);
  if (isBot) return;

  var sec = 5;
  var el  = document.getElementById('sec');
  var timer = setInterval(function(){
    sec--;
    if (el) el.textContent = sec;
    if (sec <= 0) {
      clearInterval(timer);
      window.location.href = "<?php echo esc_url( home_url('/') ); ?>";
    }
  }, 1000);
})();
</script>

<?php get_footer(); ?>
