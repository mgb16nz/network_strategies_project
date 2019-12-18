<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
	<% if $Photo %>
	<% with $Photo.CropHeight(250) %>
    		<img class="captionedImage" src="$URL" alt="" />
    	<% end_with %>
	<% end_if %>
        <h1>$Title</h1>  
        <div class="content">$Content</div>
    </article>
    <% loop $Children %>
        <article>
	    <div class="post-container">

            <div class="post-thumb">
                <% with $Photo.Fill(242,156) %>
                    <img src="$URL" alt="" width="$Width" height="$Height" />
                <% end_with %>
            </div>
	    
            <h2><a href="$Link" title="Read about {$Title}">$Title &#150; $Position</a></h2>

            <p>$Content.FirstSentence 
            <a href="$Link" title="Read about {$Title}">Read more &gt;&gt;</a></p>
	    
	    </div>
        </article>
    <% end_loop %>
        $Form
</div> 