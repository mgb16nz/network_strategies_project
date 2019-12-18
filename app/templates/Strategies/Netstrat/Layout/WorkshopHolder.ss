<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
	  <% if $Photo %>

	 	<% with $Photo.CropHeight(350) %>	  
    			<img class="captionedImage" src="$URL" alt="" />
    		<% end_with %>
	  <% end_if %>
        <h1>$Title</h1>  
        <div class="content">$Content</div>
    </article>
    <% loop $Children %>
        <article>
            <h3><a href="$Link" title="Read about {$Title}">$Title</a></h3>
        </article>
    <% end_loop %>
        $Form
</div> 