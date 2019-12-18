<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>
	</article>

	<!-- NEWS PAGINATION LOOP -->
	<% loop $PaginatedChildren %>
        <article>
			<div class="post-container">
				<!-- IMAGE -->
				<div class="post-thumb">
					<% with $Photo.Fill(242,156) %>
						<img src="$URL" alt="" width="$Width" height="$Height" />
					<% end_with %>
				</div>
				<!-- SUMMERY POST -->
				<div class="post-summary">
					<h2><a href="$Link" title="Read more on &quot;{$Title}&quot;">$Title</a></h2>
					<p>$Date.Long &#150;
					<% if $SubHead %>
						$SubHead</p>
					<% end_if %>
					<a href="$Link" title="Read more on &quot;{$Title}&quot;">Read more &gt;&gt;</a>
				</div>
			</div>
        </article>
    <% end_loop %>

	<!-- BEGIN PAGINATION -->
	<div class="pageList">
		<% if $PaginatedChildren.MoreThanOnePage %>
			<div id="PageNumbers">

				<div class="pagination">

					<!-- PREVIEW PREVIOUS PAGE -->
					<% if $PaginatedChildren.NotFirstPage %>
						<a class="prev" href="$PaginatedChildren.PrevLink" title="View the previous page">&larr;</a>
					<% end_if %>

					<!-- LOOP -->
					<span>
						<% loop $PaginatedChildren.PaginationSummary %>
							<% if $CurrentBool %>
								$PageNum
							<% else %>
								<% if $Link %>
									<a href="$Link">$PageNum</a>
								<% else %>
									...
								<% end_if %>
							<% end_if %>
						<% end_loop %>
					</span>

					<!-- VIEW NEXT PAGE -->
					<% if $PaginatedChildren.NotLastPage %>
						<a class="next" href="$PaginatedChildren.NextLink" title="View the next page">&rarr;</a>
					<% end_if %>

				</div>
			</div>

		<% end_if %>
	</div>

		$Form
		$CommentsForm
</div>