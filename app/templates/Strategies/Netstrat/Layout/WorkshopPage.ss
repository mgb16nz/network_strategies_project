<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
    <article>
	<% if $Photo %>
	<% with $Photo.CropHeight(300) %>
    		<img class="captionedImage" src="$URL" alt="" />
    	<% end_with %>
	<% end_if %>
        <h1>$title</h1>
        <div class="content">
	<div class="workshop">
	  	<div class="leftcol">Objective</div>
	  	<div class="rightcol">$Objective</div>

	  	<div class="leftcol">Target audience</div>
	  	<div class="rightcol">$Target</div>

	  	<div class="leftcol">Duration</div>
	  	<div class="rightcol">$Duration</div>

	  	<div class="leftcol">Agenda</div>
	  	<div class="rightcol">$Content</div>

	  	<div class="leftcol">Cost</div>
	  	<div class="rightcol">$Cost</div>

	  	<div class="leftcol">Contact</div>
	  	<div class="rightcol"><a href="mailto:$Email"><span class='symbol'>&#64;</span>$Email</a><br>
			<span class='symbol'>&#9742;</span> $Phone</div>
	</div>
	</div>
    </article>
        $Form
</div>