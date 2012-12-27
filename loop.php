<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) : ?>
	<div class="notice">
		<p class="bottom"><?php _e('Sorry, no results were found.', 'reverie'); ?></p>
	</div>
	<?php get_search_form(); ?>	
<?php endif; ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php reverie_entry_meta(); ?>
		</header>
		<div class="entry-content">
	<?php if (is_archive() || is_search()) : // Only display excerpts for archives and search ?>
		<?php the_excerpt(); ?>
	<?php else : ?>
		<?php the_content('Continue reading...'); ?>
	<?php endif; ?>
		</div>
		<footer>
			<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
		</footer>
		<div class="divider"></div>
	</article>	
<?php endwhile; // End the loop ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
<nav id="post-nav">
	<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
	<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
</nav>
<?php } ?>


	<div class="row">
		<div class="twelve columns">
			<h2>GIN-ICHI.co.jp prototype</h2>
			<p>This is version 3.2.3.</p>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="eight columns">
			<h3>The Grid</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="twelve columns">
					<div class="panel">
						<p>This is a twelve column section in a row. Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="six columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
				<div class="six columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="four columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="four columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="four columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
			</div>

			<h3>Tabs</h3>
			<dl class="tabs">
				<dd class="active"><a href="#simple1">Simple Tab 1</a></dd>
				<dd><a href="#simple2">Simple Tab 2</a></dd>
				<dd><a href="#simple3">Simple Tab 3</a></dd>
			</dl>

			<ul class="tabs-content">
				<li class="active" id="simple1Tab">This is simple tab 1's content. Pretty neat, huh?</li>
				<li id="simple2Tab">This is simple tab 2's content. Now you see it!</li>
				<li id="simple3Tab">This is simple tab 3's content. It's, you know...okay.</li>
			</ul>

			<h3>Buttons</h3>

      <div class="row">
        <div class="six columns">
          <p><a href="#" class="small button">Small Button</a></p>
          <p><a href="#" class="button">Medium Button</a></p>
          <p><a href="#" class="large button">Large Button</a></p>
        </div>
        <div class="six columns">
          <p><a href="#" class="small alert button">Small Alert Button</a></p>
          <p><a href="#" class="success button">Medium Success Button</a></p>
          <p><a href="#" class="large secondary button">Large Secondary Button</a></p>
        </div>
      </div>
		</div>

		<div class="four columns">
			<h4>Getting Started</h4>
			<p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>

			<h4>Other Resources</h4>
			<p>Once you've exhausted the fun in this document, you should check out:</p>
			<ul class="disc">
				<li><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</li>
				<li><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</li>
				<li><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</li>
			</ul>
		</div>
	</div>