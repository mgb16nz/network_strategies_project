<% include SideBarLatestNews %>
	<div class="content-container unit size3of4 lastUnit">
		<article>

			<% if $Photo %>

				<% with $Photo.CropHeight(350) %>
					<img class="captionedImage" src="$URL" alt="" />
				<% end_with %>
			<% end_if %>

			<h1>$Title</h1>

			<div class="subhead">
				<% if $SubHead %>
					<h2>$SubHead</h2>
				<% end_if %>

				<h3>
					<% if $Location %>
						$Location &#150;
					<% end_if %>
					$Date.Long
				</h3>
			</div>

			<div class="content">$Content</div>

		</article>

		$Form
		$CommentsForm

	</div>
