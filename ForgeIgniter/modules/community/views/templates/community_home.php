{include:header}

<div id="tpl-community" class="module">
		
	<div class="col col1">
	
		<h1>{page:heading}</h1>

		{if messages:unread > 0}
			<div class="message">
				You have unread messages! <a href="{site:url}messages/">Click here</a> to read your messages.
			</div>
		{/if}
							
		{if errors}
			<div class="error">
				{errors}
			</div>
		{/if}
		
		{if user:bio}
			<h3>About Me</h3>
			<div class="bio">
				{user:bio}
			</div>
		{/if}

		{if user:employer}
			<h3>My work</h3>

			<p><strong>{user:employer}</strong></p>
			
			<div class="bio">
				{user:work}
			</div>
		{/if}
		
	</div>
	<div class="col col2">
		
		<div class="avatar">
			{user:avatar}
		</div>
		
		<br />

		<ul class="menu">
			{profile:navigation}
		</ul>
		
		<br />
		
		<form method="post" action="{site:url}users/search" class="default">

			<label for="searchbox">Search user:</label><br class="clear" />
			<input type="text" name="query" id="searchbox" maxlength="255" value="" class="searchbox" />
			<input type="image" src="{site:url}static/images/btn_search.gif" id="searchbutton" />
			<br class="clear" />

		</form>
	
	</div>

</div>
		
{include:footer}