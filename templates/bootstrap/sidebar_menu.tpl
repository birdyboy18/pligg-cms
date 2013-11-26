{************************************
****** Sidebar Menu Template *******
*************************************}
<!-- Start Menu -->
	<ul class="menu">
		{if $user_authenticated eq true}
			<li><span class="subheading">User</span></li>
			{if isset($isadmin) && $isadmin eq 1}
				<li><a href="{$URL_admin}"><i class="fa fa-asterisk"></i>{#PLIGG_Visual_Header_AdminPanel#}</a></li>
			{/if}
			<li><a href="{$URL_logout}"><i class="fa fa-unlock-alt"></i>{#PLIGG_Visual_Logout#}</a></li>
			<li><a href="{$URL_News_Sent}"><i class="fa fa-plus"></i>{#PLIGG_Visual_User_NewsSent#}</a></li>
		{/if}
		
		{if $user_authenticated neq true}
		<li><span class="subheading">User</span></li>
		<li><a data-toggle="modal" href="#loginModal"><i class="fa fa-lock"></i>{#PLIGG_Visual_Login_Title#}</a></li>
		<li><a href="{$URL_register}"><i class="fa fa-check"></i>{#PLIGG_Visual_Register#}</a></li>
		{/if}

		<li><a href="{$URL_groups}"><i class="fa fa-group"></i>{#PLIGG_Visual_Groups#}</a></li>
		<li><span class="subheading">Categories</span></li>
		<!-- Start Category Loop -->
			{checkActionsTpl location="tpl_widget_categpries_start"}
				{section name=thecat loop=$cat_array}
					{if $cat_array[thecat].auto_id neq 0}
						<li><a href="{$URL_maincategory, $cat_array[thecat].safename}">{$cat_array[thecat].name}</a></li>
					{/if}
				{/section}
			{checkActionsTpl location="tpl_widget_categories_end"}
		<!-- End Category Loop -->
		<li><span class="subheading">Search</span></li>
		<li><a href="{$URL_advancedsearch}"><i class="fa fa-search"></i>{#PLIGG_Visual_Search_Advanced#}</a></li>
	</ul>
<!-- End Menu-->
<!-- Start sidebar_menu.tpl -->
{if $pagename eq "published" || $pagename eq "index" || $pagename eq "new" || $pagename eq "cloud" || $pagename eq "groups" || $pagename eq "live" || $pagename eq "live_published" || $pagename eq "live_unpublished" || $pagename eq "live_comments"}
<ul class="sort-menu">

	{if $setmeka eq "" || $setmeka eq "recent"}
		<li class="active"><a href="{$index_url_recent}"><i class="fa fa-clock-o"></i></a></li>
	{else}
		<li><a href="{$index_url_recent}"><i class="fa fa-clock-o"></i></a></li>
	{/if}

	{if $setmeka eq "upvoted"}
		<li class="active"><a href="{$index_url_upvoted}"><i class="fa fa-thumbs-o-up"></i></a></li>
	{else}
		<li><a href="{$index_url_upvoted}"><i class="fa fa-thumbs-o-up"></i></a></li>
	{/if}

	{if $setmeka eq "downvoted"}
		<li class="active"><a href="{$index_url_downvoted}"><i class="fa fa-thumbs-o-down"></i></a></li>
	{else}
		<li><a href="{$index_url_downvoted}"><i class="fa fa-thumbs-o-down"></i></a></li>
	{/if}

	{if $setmeka eq "commented"}
		<li class="active"><a href="{$index_url_commented}"><i class="fa fa-comments-o"></i></a></li>
	{else}
		<li><a href="{$index_url_commented}"><i class="fa fa-comments-o"></i></a></li>
	{/if}

	{if $setmeka eq "today"}
		<li class="active"><a href="{$index_url_today}"><i class="fa fa-star-o"></i></a></li>
	{else}
		<li><a href="{$index_url_today}"><i class="fa fa-star-o"></i></a></li>
	{/if}

	{if $setmeka eq "yesterday"}
		<li class="active"><a href="{$index_url_yesterday}"><i class="fa fa-reply"></i></a></li>
	{else}
		<li><a href="{$index_url_yesterday}"><i class="fa fa-reply"></i></a></li>
	{/if}

	{if $setmeka eq "week"}
		<li class="active"><a href="{$index_url_week}"><i class="fa fa-reply-all"></i></a></li>
	{else}
		<li><a href="{$index_url_week}"><i class="fa fa-reply-all"></i></a></li>
	{/if}

	{if $setmeka eq "month"}
		<li class="active"><a href="{$index_url_month}"><i class="fa fa-calendar"></i></a></li>
	{else}
		<li><a href="{$index_url_month}"><i class="fa fa-calendar"></i></a></li>
	{/if}
</ul>
{/if}

{if $pagename eq "story" || $pagename eq "submit" || $pagename eq "user" || $pagename eq "register" || $pagename eq "advancedsearch"}
<ul class="sort-menu">
	<li><a href="{$my_base_url}{$my_pligg_base}"><i class="fa fa-home"></i></a></li>
</ul>
{/if}

{if $pagename eq "search" || $pagename eq "noresults"}
<ul class="sort-menu">
	<li><a href="{$my_base_url}{$my_pligg_base}"><i class="fa fa-home"></i></a></li>

	{if $setmeka eq "" || $setmeka eq "recent"}
		<li class="active"><a href="{$index_url_recent}"><i class="fa fa-clock-o"></i></a></li>
	{else}
		<li><a href="{$index_url_recent}"><i class="fa fa-clock-o"></i></a></li>
	{/if}

	{if $setmeka eq "upvoted"}
		<li class="active"><a href="{$index_url_upvoted}"><i class="fa fa-thumbs-o-up"></i></a></li>
	{else}
		<li><a href="{$index_url_upvoted}"><i class="fa fa-thumbs-o-up"></i></a></li>
	{/if}

	{if $setmeka eq "downvoted"}
		<li class="active"><a href="{$index_url_downvoted}"><i class="fa fa-thumbs-o-down"></i></a></li>
	{else}
		<li><a href="{$index_url_downvoted}"><i class="fa fa-thumbs-o-down"></i></a></li>
	{/if}

	{if $setmeka eq "commented"}
		<li class="active"><a href="{$index_url_commented}"><i class="fa fa-comments-o"></i></a></li>
	{else}
		<li><a href="{$index_url_commented}"><i class="fa fa-comments-o"></i></a></li>
	{/if}
</ul>
{/if}
<!-- End sidebar_menu.tpl -->