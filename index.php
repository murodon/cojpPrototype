<?php get_header(); ?>

    <div class="row">
            <div class="nine columns">
                <div class="panel">
                this is a slider area.
                </div>
            </div>
            
            <div class="three columns">
                <div class="panel">
                this area is a news release.
                </div>
            </div>
    </div>


    <div class="row">
        <div class="twelve columns">
        <h3>サービス</h3>
            <div class="row">
                <div class="six columns">
                    <div class="panel">
                    this is a service area.
                    </div>
                </div>
                <div class="six columns">
                    <div class="panel">
                    this is a service area.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
        <h3>トピック</h3>
            <div class="row">
                <div class="three columns">
                    <div class="panel">
                    this is a topic area.
                    </div>
                </div>
                <div class="three columns">
                    <div class="panel">
                    this is a topic area.
                    </div>
                </div>
                <div class="three columns">
                    <div class="panel">
                    this is a topic area.
                    </div>
                </div>
                <div class="three columns">
                    <div class="panel">
                    this is a topic area.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
        <h3>お問い合わせ</h3>
            <div class="panel">
            お問い合わせエリア
            </div>
        </div>
    </div>

    <div class="row">
            <div class="three columns">
            <h3>カタログ</h3>
                <div class="panel">
                this is a slider area.
                </div>
            </div>
            
            <div class="nine columns">
            <h3>Facebook</h3>
                <div class="panel">
                this area is a news release.
                </div>
            </div>
    </div>

	<div class="row">
		<div class="eight columns">

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


		<!-- Row for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'index'); ?>
			</div>

		</div><!-- End Content row -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>