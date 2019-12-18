<% include SideBar %>

<div class="content-container unit size3of4 lastUnit">
	<article>
		<% if $Photo %>
			<% with $Photo.CropHeight(350) %>
				<img class="captionedImage" src="$URL" width="$Width" height="$Height" alt="" />
			<% end_with %>
		<% end_if %>

		<h1>$Title</h1>
		<div class="content">$Content</div>

	</article>

		$Form
		$CommentsForm

</div>
