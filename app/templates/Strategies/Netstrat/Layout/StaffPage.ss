<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
	    <% with $Photo.CropHeight(250) %>
    		<img class="captionedImage" src="$URL" alt="" />
    	<% end_with %>
        <h1>$title &#150; $Position</h1>
        <div class="content">
            $Content
	        <a href="mailto:$Email"><span class='symbol'>&#64;</span>$Email</a>
	    </div>
    </article>

        $Form

</div>