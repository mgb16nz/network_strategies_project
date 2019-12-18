<% include SideBar %>

<div class="content-container unit size3of4 lastUnit">

	<article>

		<h1>$Title</h1>

		<div class="content">$Content

			<div class="grid-style1 clearfix">
				<% loop $Offices %>
					<div class="post-container">
						<div class="post-thumb">
							<% with $Photo.Fill(242,156) %>
								<img src="$URL" alt="" width="$Width" height="�$Height�" />
							<% end_with %>
						</div>
						<div class="post-summary">
							<h3>Network Strategies &#150; $Title</h3>
						<p>$Address<br />
							Tel: $Phone <br />
							<% if $Fax %>
								Fax: $Fax <br />
							<% end_if %>
							Email: <a href="mailto:$Email">$Email</a> <br />
							<% if $Manager %>
								$Manager
							<% end_if %>
						</p>
						</div>
					</div>
				<% end_loop %>
			</div>

		</div>

	</article>

		$Form

		$CommentsForm

</div>