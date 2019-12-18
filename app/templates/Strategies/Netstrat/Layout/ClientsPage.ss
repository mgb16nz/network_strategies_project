<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
	<% if $Photo %>
	<% with $Photo.CropHeight(250) %>
    		<img class="captionedImage" src="$URL" alt="" />
    	<% end_with %>
	<% end_if %>
        <h1>$Title </h1>
        <div class="content">
            $Content
	</div>
    </article>
        $Form
</div>