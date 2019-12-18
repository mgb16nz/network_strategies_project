<div class="content-container unit size3of4 lastUnit">
	<article>

		<!-- SLIDER -->
		<div>
			<% include FlexSlider %>
		</div>

		<div class="content">$Content</div>

		<!-- LATEST NEWS POSTED -->
		<h1 class="section-title">Latest news</h1>

		<% loop $LatestNews(2) %>
			<article>
				<div class="post-container">

					<div class="post-thumb">
						<% with $Photo.Fill(242,156) %>
							<img src="$URL" alt="" width="$Width" height="�$Height�" />
						<% end_with %>
					</div>

					<div class="post-summary">
						<h3><a href="$Link" title="Read more on &quot;{$Title}&quot;">$Title</a></h3>
						<% if $Teaser %>
							<p>$Teaser</p>
						<% else %>
							<p>$Content.FirstParagraph</p>
						<% end_if %>

						<a href="$Link" title="Read more on &quot;{$Title}&quot;">Read more &rarr;</a>
					</div>

				</div>
			</article>

		<% end_loop %>

		<!-- RECENT ARTICLES POSTED -->
		<h1 class="section-title">Recent articles</h1>
		<% loop $LatestArticles(2) %>
			<article>
				<div class="post-container">

					<div class="post-thumb">
						<% with $Photo.Fill(242,156) %>
							<img src="$URL" alt="" width="$Width" height="�$Height�" />
						<% end_with %>
					</div>

					<div class="post-summary">
						<h3><a href="$Link" title="Read more on &quot;{$Title}&quot;">$Title</a></h3>
						<% if $Teaser %>
							<p>$Teaser</p>
						<% else %>
							<p>$Content.FirstParagraph</p>
						<% end_if %>

						<a href="$Link" title="Read more on &quot;{$Title}&quot;">Read more &rarr;</a>
					</div>

				</div>
			</article>

		<% end_loop %>

	</article>

	$Form
	$CommentsForm

</div>

