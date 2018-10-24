<!-- Begin Article
================================================== -->
<div class="container">
	<div class="row">

		<!-- Begin Fixed Left Share -->
		<div class="col-md-2 col-xs-12">
			<div class="share">
				<p>Share</p>
				<ul>
					<li>
						<a target="_blank" href="https://twitter.com/home?status=<?php echo urlencode($page->permalink()) ?>">
						<svg class="svgIcon-use" width="29" height="29" viewbox="0 0 29 29"><path d="M21.967 11.8c.018 5.93-4.607 11.18-11.177 11.18-2.172 0-4.25-.62-6.047-1.76l-.268.422-.038.5.186.013.168.012c.3.02.44.032.6.046 2.06-.026 3.95-.686 5.49-1.86l1.12-.85-1.4-.048c-1.57-.055-2.92-1.08-3.36-2.51l-.48.146-.05.5c.22.03.48.05.75.08.48-.02.87-.07 1.25-.15l2.33-.49-2.32-.49c-1.68-.35-2.91-1.83-2.91-3.55 0-.05 0-.01-.01.03l-.49-.1-.25.44c.63.36 1.35.57 2.07.58l1.7.04L7.4 13c-.978-.662-1.59-1.79-1.618-3.047a4.08 4.08 0 0 1 .524-1.8l-.825.07a12.188 12.188 0 0 0 8.81 4.515l.59.033-.06-.59v-.02c-.05-.43-.06-.63-.06-.87a3.617 3.617 0 0 1 6.27-2.45l.2.21.28-.06c1.01-.22 1.94-.59 2.73-1.09l-.75-.56c-.1.36-.04.89.12 1.36.23.68.58 1.13 1.17.85l-.21-.45-.42-.27c-.52.8-1.17 1.48-1.92 2L22 11l.016.28c.013.2.014.35 0 .52v.04zm.998.038c.018-.22.017-.417 0-.66l-.498.034.284.41a8.183 8.183 0 0 0 2.2-2.267l.97-1.48-1.6.755c.17-.08.3-.02.34.03a.914.914 0 0 1-.13-.292c-.1-.297-.13-.64-.1-.766l.36-1.254-1.1.695c-.69.438-1.51.764-2.41.963l.48.15a4.574 4.574 0 0 0-3.38-1.484 4.616 4.616 0 0 0-4.61 4.613c0 .29.02.51.08.984l.01.02.5-.06.03-.5c-3.17-.18-6.1-1.7-8.08-4.15l-.48-.56-.36.64c-.39.69-.62 1.48-.65 2.28.04 1.61.81 3.04 2.06 3.88l.3-.92c-.55-.02-1.11-.17-1.6-.45l-.59-.34-.14.67c-.02.08-.02.16 0 .24-.01 2.12 1.55 4.01 3.69 4.46l.1-.49-.1-.49c-.33.07-.67.12-1.03.14-.18-.02-.43-.05-.64-.07l-.76-.09.23.73c.57 1.84 2.29 3.14 4.28 3.21l-.28-.89a8.252 8.252 0 0 1-4.85 1.66c-.12-.01-.26-.02-.56-.05l-.17-.01-.18-.01L2.53 21l1.694 1.07a12.233 12.233 0 0 0 6.58 1.917c7.156 0 12.2-5.73 12.18-12.18l-.002.04z"></path></svg>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page->permalink()) ?>">
						<svg class="svgIcon-use" width="29" height="29" viewbox="0 0 29 29"><path d="M16.39 23.61v-5.808h1.846a.55.55 0 0 0 .546-.48l.36-2.797a.551.551 0 0 0-.547-.62H16.39V12.67c0-.67.12-.813.828-.813h1.474a.55.55 0 0 0 .55-.55V8.803a.55.55 0 0 0-.477-.545c-.436-.06-1.36-.116-2.22-.116-2.5 0-4.13 1.62-4.13 4.248v1.513H10.56a.551.551 0 0 0-.55.55v2.797c0 .304.248.55.55.55h1.855v5.76c-4.172-.96-7.215-4.7-7.215-9.1 0-5.17 4.17-9.36 9.31-9.36 5.14 0 9.31 4.19 9.31 9.36 0 4.48-3.155 8.27-7.43 9.15M14.51 4C8.76 4 4.1 8.684 4.1 14.46c0 5.162 3.75 9.523 8.778 10.32a.55.55 0 0 0 .637-.543v-6.985a.551.551 0 0 0-.55-.55H11.11v-1.697h1.855a.55.55 0 0 0 .55-.55v-2.063c0-2.02 1.136-3.148 3.03-3.148.567 0 1.156.027 1.597.06v1.453h-.924c-1.363 0-1.93.675-1.93 1.912v1.78c0 .3.247.55.55.55h2.132l-.218 1.69H15.84c-.305 0-.55.24-.55.55v7.02c0 .33.293.59.623.54 5.135-.7 9.007-5.11 9.007-10.36C24.92 8.68 20.26 4 14.51 4"></path></svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End Fixed Left Share -->

		<!-- Begin Post -->
		<div class="col-md-8 col-md-offset-2 col-xs-12">

			<!-- Load Bludit Plugins: Page Begin -->
			<?php Theme::plugins('pageBegin'); ?>

			<div class="mainheading">
				<h1 class="posttitle"><?php echo $page->title(); ?></h1>
				<div class="wrapfooter">
					<span class="author-meta">
					<span class="post-name">by <?php echo $page->user('nickname'); ?></span><br/>
					<span class="post-date"><?php echo $page->date(); ?></span><span class="dot"></span><span class="post-read"><?php echo $page->readingTime(); ?></span>
					</span>
				</div>
			</div>

			<!-- Begin Cover Image -->
			<?php if ($page->coverImage()): ?>
			<img class="featured-image img-fluid" src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->title(); ?>">
			<?php endif ?>
			<!-- End Cover Image -->

			<!-- Begin Post Content -->
			<div class="article-post">
				<?php echo $page->content(); ?>
			</div>
			<!-- End Post Content -->

			<!-- Begin Tags -->
			<?php if (!empty($page->tags(true))): ?>
			<div class="after-post-tags">
				<ul class="tags">
					<?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
					<li><a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><?php echo $tagName; ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
			<?php endif; ?>
			<!-- End Tags -->

			<!-- Load Bludit Plugins: Page End -->
			<?php Theme::plugins('pageEnd'); ?>

		</div>
		<!-- End Post -->

	</div>

	<!-- Begin Footer
	================================================== -->
	<div class="footer">
		<p class="pull-left">
			<?php echo $site->footer(); ?>
		</p>
		<p class="pull-right">
			Designed by <a target="_blank" href="https://www.wowthemes.net">Wowthemes</a> |
			Powered by <a target="_blank" href="https://www.bludit.com">Bludit.com</a>
		</p>
		<div class="clearfix">
		</div>
	</div>
	<!-- End Footer
	================================================== -->
</div>
<!-- End Article
================================================== -->
