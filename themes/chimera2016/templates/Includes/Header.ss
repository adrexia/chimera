<header class="header" role="banner">
	<div class="inner">

		<% include Login %>
		<section class="brand-group">
			<% if $SiteConfig.Logo %>
				<h1 class="image">
					<a href="$BaseHref" class="logo" rel="home" alt="$SiteConfig.LogoText" style="background-image: url($SiteConfig.Logo.URL);">
						<span class="sr-only">
							$SiteConfig.LogoText
						</span>
					</a>
				</h1>
			<% else %>
				<h1 class="seven columns">
					<a href="$BaseHref" class="logo" rel="home">
						$SiteConfig.LogoText
					</a>
				</h1>
			<% end_if %>
		</section>

	</div>
</header>

<% include Navigation %>
