<% if $SlideLink %><% with $SlideLink %><a href="$LinkURL"{$TargetAttr}$ClassAttr title="$Title"><% end_with %><% end_if %>
    <% if $Image %>
        <img src="$Image.Fill(1000,400).URL" alt="<% if $Headline %>$Headline<% end_if %>">
    <% end_if %>
<% if $SlideLink %></a><% end_if %>
<p class="flex-caption">
    <% if $Headline %><span class="flex-caption-inner heading">$Headline</span><% end_if %>
    <% if $Description %><span class="flex-caption-inner heading">$Description</span><% end_if %>
</p>
<%--<% if $SlideLink %>--%>
<%--    <div>--%>
<%--        $SlideLink--%>
<%--    </div>--%>
<%--<% end_if %>--%>

