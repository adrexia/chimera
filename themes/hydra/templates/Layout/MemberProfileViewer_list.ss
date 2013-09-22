<% require css(memberprofiles/css/MemberProfileViewer.css) %>

<div class="typography row">
	<section class="nine columns">
	<div class="content-container">
		<article>
			<h2>$Title</h2>
			<div class="content">$Content
				<table id="member-list">
					<thead>
						<tr>
							<% control Members.First %>
								<% control Fields %>
									<% if Sortable %>
										<th><a href="$Top.Link?sort=$Name">$Title</a></th>
									<% else %>
										<th>$Title</th>
									<% end_if %>
								<% end_control %>
							<% end_control %>
						</tr>
					</thead>
					<tbody>
						<% control Members %>
							<tr class="$EvenOdd">
								<% control Fields %>
									<td><a href="$Link">$Value</a></td>
								<% end_control %>
							</tr>
						<% end_control %>
					</tbody>
				</table>

				<% if Members.MoreThanOnePage %>
					<div id="MemberListPagination" class="pagination">
						<% if Members.NotFirstPage %>
							<a class="prev" href="$Members.PrevLink"><%t PREV 'Prev' %></a>
						<% end_if %>
						<span class="pageLinks">
							<% control Members.PaginationSummary(4) %>
								<% if CurrentBool %>
									<span class="current">$PageNum</span>
								<% else %>
										<% if PageNum %>
											<a href="$Link">$PageNum</a>
										<% else %>
											&hellip;
										<% end_if %>
								<% end_if %>
							<% end_control %>
						</span>
						<% if Members.NotLastPage %>
							<a class="next" href="$Members.NextLink"><%t NEXT 'Next' %></a>
						<% end_if %>
					</div>
				<% end_if %>
				$Form
				
				$PageComments
			</div>
		</article>
	</div>
	</section>
	<section class="three columns">
		 <% if Quicklinks %>
			<div class="link-set">
				<h2><i class="icon-link" aria-hidden="true"></i> Links</h2>
				<ul>
					<% loop Quicklinks %>
						<li class="$EvenOdd $FirstLast"><a href="$Link" class="$FirstLast">$Name</a></li>
					<% end_loop %>
				</ul>
			</div>
			<% end_if %>

	</section>
</div>