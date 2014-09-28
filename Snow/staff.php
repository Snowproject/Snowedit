<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Staff</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
        
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
        
        <!--[if IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({url}/app/tpl/skins/Habbo/js/csshover.htc); }
            </style>
        <![endif]-->
    </head>
    
    <body id="home">
    
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                    <div id="subnavi-user">
                        <div style="margin-top:7px"></div>
                    </div>
                    <div id="subnavi-search">
                        <div id="subnavi-search-upper">
                            <ul id="subnavi-search-links">
								<li><a href="http://www.google.com/" target="_blank" style="color:#000">Help</a></li>
                                <li><a href="{url}/logout" style="color:#000">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="to-hotel">
                        <a href="{url}/api.php" class="new-button green-button" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;"><b>Enter {hotelName} Hotel</b><i></i></a>
                    </div>
                </div>
                <ul id="navi">
                    <li class="metab"><a href="{url}/me">{username}</a><span></span></li>
                    <li class="selected"><strong>Community</strong><span></span></li>
					<li><a href="{url}/shop">Shop Now</a><span></span></li>
					<li><a href="http://www.google.com/" target="_blank">Forum</a><span></span></li>
					<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 6)
					{ ?>
                    <li class="tab-register-now"><a href="{url}/ase/">Housekeeping</a><span></span></li>
                    <?php
                    } ?>
                </ul>
                <div id="habbos-online">
                    <div class="rounded"><span>{online} members online</span></div>
                </div>
            </div>
        </div>
        <div id="content-container">
            <div class="pngbg" id="navi2-container">
                <div class="pngbg clearfix" id="navi2">
                    <ul>
                        <li class=""><a href="{url}/community">Community</a></li>
                        <li class=""><a href="{url}/news">News</a></li>
                        <li class=" selected ">Staff</li>
                    </ul>
                </div>
            </div>
            <div id="container">
                <div id="content">
                    <div class="column" id="column2">
                        <?php	
					$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 7 ORDER BY id DESC");
					while ($Ranks = mysql_fetch_assoc($getRanks))
					{	
					echo '<div class="habblet-container ">		
					<div class="cbb clearfix red ">
					<h2 class="title"><span style="float: left;">' . $Ranks['name'] . '</span> <span style="float: right; font-weight: normal; font-size: 75%;"></span></h2>';
					$getMembers = mysql_query("SELECT id,username,motto,look,online,last_online FROM users WHERE rank = '" . $Ranks['id'] . "'");
					echo '<div class="box-content">';
					if (mysql_num_rows($getMembers)> 0)
					{
					$oe = 1;
					while ($member = mysql_fetch_assoc($getMembers))
					{
					if ($oe == 2)
					{
					$oe = 1;
					}
					else
					{
					$oe = 2;
			}
				echo '<table width="107%" height="50px" style="padding: 5px; margin-left: -15px; background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<img style="margin-top: -10px;" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=' .$member['look'] . '&size=m&direction=2&head_direction=3&gesture=sml">
					</td>
					<td valign="top">
						</br><p style="margin-top: -10px;" style="font-size: 100%;"><strong><a><u>' .$member['username'] . '</a></u></strong><br>Motto: ' . $member['motto'] . '' . (($member['online'] == "1") ? '<font color="darkgreen"><p style="margin-left: 165px; margin-top: -37px;"><strong>Online</stromg>': '<font color="darkred"><strong><p style="margin-left: 165px; margin-top: -37px;">Offline</stromg>') . '</p></p><p style="margin-top: -8px;"><img src="{url}/r63/c_images/album1584/ADM.gif"></p>
						';	
					echo '</td>
					</td>
				</tr>
			</tbody>
			</table>';
		}
	}
	else
	{
		echo '<i>No information available.</i';
	}
	
	echo '</div>
	</div> 
</div> 
	<script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';
	}

						?>
					</div>
                    <script type="text/javascript">
                        if (!$(document.body).hasClassName('process-template')) {
                            Rounder.init();
                        }
                    </script>
                    <div class="column" id="column2">
                        <div class="habblet-container ">
                            <?php

			$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 6 ORDER BY id DESC");

			while ($Ranks = mysql_fetch_assoc($getRanks))
			{	
				echo '<div class="habblet-container ">		
			<div class="cbb clearfix blue ">
			<h2 class="title"><span style="float: left;">' . $Ranks['name'] . '</span> <span style="float: right; font-weight: normal; font-size: 75%;"></span></h2>';
				
				$getMembers = mysql_query("SELECT id,username,motto,look,online,last_online FROM users WHERE rank = '" . $Ranks['id'] . "'");
				
				echo '<div class="box-content">';
				
				if (mysql_num_rows($getMembers)> 0)
				{
					$oe = 1;
					
					while ($member = mysql_fetch_assoc($getMembers))
					{
						if ($oe == 2)
						{
							$oe = 1;
						}
						else
						{
							$oe = 2;
						}
				
						echo '<table width="107%" height="50px" style="padding: 5px; margin-left: -15px; background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
						<tbody>
							<tr>
								<td valign="middle" width="25">
									<img style="margin-top: -10px;" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=' .$member['look'] . '&size=m&direction=2&head_direction=3&gesture=sml">
								</td>
								<td valign="top">
									</br><p style="margin-top: -10px;" style="font-size: 100%;"><strong><a><u>' .$member['username'] . '</a></u></strong><br>Motto: ' . $member['motto'] . '' . (($member['online'] == "1") ? '<font color="darkgreen"><p style="margin-left: 165px; margin-top: -37px;"><strong>Online</stromg>': '<font color="darkred"><strong><p style="margin-left: 165px; margin-top: -37px;">Offline</stromg>') . '</p></p><p style="margin-top: -8px;"><img src="{url}/r63/c_images/album1584/ADM.gif""></p>
									';
									
								
									
								echo '</td>
								
								</td>
							</tr>
						</tbody>
						</table>';
					}
				}
				else
				{
					echo '<i>No information available.</i';
				}
				
				echo '</div>
				</div> 
			</div> 
			<script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';
			}

			?>
						</div>
					</div>
				</div>
                     <div class="column" id="column2">
                                <div class="habblet-container ">
                                    <?php

			$getRanks = mysql_query("SELECT id,name FROM ranks WHERE id = 5 ORDER BY id DESC");

			while ($Ranks = mysql_fetch_assoc($getRanks))
			{	
				echo '<div class="habblet-container ">		
			<div class="cbb clearfix green ">
			<h2 class="title"><span style="float: left;">' . $Ranks['name'] . '</span> <span style="float: right; font-weight: normal; font-size: 75%;"></span></h2>';
				
				$getMembers = mysql_query("SELECT id,username,motto,look,online,last_online FROM users WHERE rank = '" . $Ranks['id'] . "'");
				
				echo '<div class="box-content">';
				
				if (mysql_num_rows($getMembers)> 0)
				{
					$oe = 1;
					
					while ($member = mysql_fetch_assoc($getMembers))
					{
						if ($oe == 2)
						{
							$oe = 1;
						}
						else
						{
							$oe = 2;
						}
				
						echo '<table width="107%" height="50px" style="padding: 5px; margin-left: -15px; background-color: ' . (($oe == 2) ? '#fff' : '#E6E6E6') . ';">
						<tbody>
							<tr>
								<td valign="middle" width="25">
									<img style="margin-top: -10px;" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=' .$member['look'] . '&size=m&direction=2&head_direction=3&gesture=sml">
								</td>
								<td valign="top">
									</br><p style="margin-top: -10px;" style="font-size: 100%;"><strong><a><u>' .$member['username'] . '</a></u></strong><br>Motto: ' . $member['motto'] . '' . (($member['online'] == "1") ? '<font color="darkgreen"><p style="margin-left: 165px; margin-top: -37px;"><strong>Online</stromg>': '<font color="darkred"><strong><p style="margin-left: 165px; margin-top: -37px;">Offline</stromg>') . '</p></p><p style="margin-top: -8px;"><img src="{url}/r63/c_images/album1584/ADM.gif"></p>
									';
									
								
									
								echo '</td>
								
								</td>
							</tr>
						</tbody>
						</table>';
					}
				}
				else
				{
					echo '<i>No information available.</i>';
				}
				
				echo '</div>
				</div> 
			</div> 
			<script type="text/javascript">if (!$(document.body).hasClassName(\'process-template\')) { Rounder.init(); }</script> ';
			}

			?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        if (!$(document.body).hasClassName('process-template')) {
                            Rounder.init();
                        }
                    </script>
                <!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
                        </div>
                    </div><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    HabboView.run();
</script>

		<div id="footer" >
			<?php include('footer.php'); ?>
			<?php include('checktheban.php'); ?>
        </div>
</body>
</html>