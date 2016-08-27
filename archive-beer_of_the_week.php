<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 columns" role="main">

					<div class="panel">
						<h1 class="block-header">Beer of the Week</h1>
						<p>Note:  On the off chance that it’s not inherently obvious by their dialogue, in no way, shape, or form are Abby and Luke experts when it comes to beer.  Beer enthusiasts, yes.  Beer experts, no. When they rate a beer, there is no rhyme or reason to their judgment; it’s simply based on if they like it or not.  If you’re going to hate on anyone, blame the score on their taste buds.</p>
						<p>While every effort has been made to get the official profiles about each beer that is sampled, some of the information was not easily accessible: i.e. occasionally a beer’s IBU wasn’t given; the awards the beer may have won were not clearly listed, if at all; there was no official website for the brewery; etc.  If you come across a mistake or some additional information that has been missed, PLEASE, for the love of god, tell us!  We are ready and willing to fix anything that we may have fucked up.</p>
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-botw' ); ?>

				<?php endwhile; ?>

					<!-- <?php joints_page_navi(); ?> -->

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</div>

		</main> <!-- end #main -->
				<aside class="large-4 columns botw-key">
					<div class="panel">
						<h3 class="block-header">Terms:</h3>
						<span class="style label">Style</span>
						<span> - “Beer style is a term used to differentiate and categorize beers by various factors including appearance, flavour, ingredients, production, method, history, or origin” - <a href="https://en.m.wikipedia.org/wiki/Beer_style">Wikipedia</a></span>
						<p class="aka">AKA: What kind of beer is it?</p>
						<hr>
						<span class="abv label">ABV</span>
						<span> - Alcohol By Volume</span>
						<p class="aka">AKA: What’s the alcohol content? How strong is it? How much can you drink before you can’t form coherent sentences? Etc.</p>
						<hr>
						<span class="ibu label">IBU</span>
						<span> - International Bitterness Units</span>
						<p class="aka">AKA: How bitter does your beer taste? How hoppy is it?</p>
						<hr>
						<p>For example, Bud Light has an IBU of 6.4 (i.e. not bitter at all, and perhaps you’ll even mistake it for water…), where as Sierra Nevada Hoptimum has an IBU of 100 (i.e. for the non-hops enthusiast, you might not taste anything but bitterness and promptly spit it out…).</p>
					</div>
				</aside>
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
