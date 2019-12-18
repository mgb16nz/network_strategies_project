<%--Include SidebarMenu recursively --%>
		<% loop $LatestArticles(5) %>
			<li class="$LinkingMode">
				<a href="$Link" class="$LinkingMode" title="Go to the $Title page">
					<span class="arrow">&rarr;</span>
					<span class="text">$Title</span>
				</a>

			</li>
		<% end_loop %>
