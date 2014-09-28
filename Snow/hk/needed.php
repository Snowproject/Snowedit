  <div id="main">
    <div id="links"></div>
    <div id="header"><img src="{url}/app/tpl/skins/{skin}/images/logo.png" align=right style="margin-right: 480px; margin-top: 5px;">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the color of the logo text -->
          <h1>ASE</h1>
        </div>
      </div>
    </div>
    <div id="site_content">
      <div id="sidebar_container">
        <!-- insert your sidebar items here -->
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
           <br />
		   [ <a href='?url=dash'>Return to Dashboard</a> ] [ <a href='logout'>Log out</a> ]<br /> <br />
            <p>
			<?php if($users->getInfo($_SESSION["user_id"], 'role') >= 5)
			{ ?>
			Player Management <br /> <img src='styles/line.png'> <br />
			&raquo; <a href='?page=sub'>Last 50 VIP purchases</a> <br />
			&raquo; <a href='?page=vip'>Give a user Regular VIP</a> <br />
			&raquo; <a href='?page=svip'>Give a user Super VIP</a> <br />
			&raquo; <a href='?page=edit'>Edit a users account</a> <br />
			<br />
			Administration <br /> <img src='styles/line.png'> <br />
			&raquo; <a href='?page=newnews'>Post news article</a><br />
			&raquo; <a href='?page=delnews'>Delete a news article (By ID)</a><br />
			&raquo; <a href='cmdlogs'>Command logs</a><br />&raquo; <a href='motd'>Change welcome message</a><br />
			&raquo; <a href='empty'>Empty a table</a><br />&raquo; <a href='timer'>Change the Credits & Pixels timer</a><br />
			<br />
			<?php } if($users->getInfo($_SESSION["user_id"], 'role') >= 4) { ?>
			Moderation <br /> <img src='styles/line.png'> <br />
			&raquo; <a href='?page=banlist'>Ban List</a> <br />
			&raquo; <a href='?page=ip'>IP Lookup</a> <br />
			&raquo; <a href='unban'>Unban a User</a> <br />&raquo; <a href='addban'>Ban a user</a><br />
			<br />
			Badges <br /> <img src='../app/tpl/skins/<?php echo $_CONFIG['template']['style']; ?>/hk/images/line.png'> <br />
			&raquo; <a href='listbadge'>List badges</a><br />&raquo; <a href='addbadge'>Add a badge</a><br />&raquo; <a href='delbadge'>Delete a badge</a><br />
			<?php } ?>
			<br />
			Statistics<br />
			<img src='styles/line.png'> <br />
					Server Status: 
<?php if($core->serverStat("status") == 1) { $s = "<font color='green'>Online</font>"; } else { $s = "<font color='red'>Offline / Unknown</																															font>"; } echo $s; ?> <br />
			<?php echo $core->serverStat("users_online"); ?> user(s) online <br />
			<?php echo $core->serverStat("rooms_loaded"); ?> room(s) loaded <br />
	
			</p>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content_container">

        <div id="content">
          <!-- insert the page content here -->
          <br />