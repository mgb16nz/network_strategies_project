<% include SideBarLatest %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<% if $Photo %>

			<% with $Photo.CropHeight(350) %>
				<img class="captionedImage" src="$URL" alt="" />
			<% end_with %>
		<% end_if %>

		<h1>$Title</h1>

            <div class="contact">Interested in this topic? Contact our expert
                <% if $Writer %>
                    <% if $Email %><a href="mailto:$Email">$Writer <span class='symbol'>&#64;</span></a>
                    <% else %><a href="mailto:s.hansen@strategies.nzl.com">Suella Hansen <span class='symbol'>&#64;</span></a>
                    <% end_if %>
                <% else %><a href="mailto:s.hansen@strategies.nzl.com">Suella Hansen <span class='symbol'>&#64;</span></a>
                <% end_if %>
            </div>

		<p>$Date.Long</p>
		<% if $Pullquote %>
		  <div class="pullquote">$Pullquote</div>
		<% end_if %>

		<div class="content">$Content</div>

	</article>

	$Form
	$CommentsForm

</div>
