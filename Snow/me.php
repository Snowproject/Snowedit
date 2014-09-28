<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Home</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
		<link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/campaigns.css" type="text/css">
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
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/personal.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/habboclub.js"></script>
        
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
		<!-- RevCMS Habbo Theme Edit By Tyler James -->
		<!-- Credits to Hejula for theme ; Kryptos for RevCMS -->
		<!-- Please do not remove this as this is NOT your work -->
    </head>
    
    <body id="home">
    
        <div id="overlay"></div>
        <div id="header-container">
            <div id="header" class="clearfix">
                <h1><a href="{url}/"></a></h1>
                <div id="subnavi">
                    <div id="subnavi-user">
                        <div style="margin-top:7px">
						</div>
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
                    <li class="metab selected"><strong>{username}</strong><span></span></li>
                    <li><a href="{url}/community">Community</a><span></span></li>
					<li><a href="{url}/shop">Shop Now</a><span></span></li>
					<li><a href="http://www.google.com/" target="_blank">Forum</a><span></span></li>
					<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 6)
					{ ?>
                    <li class="tab-register-now"><a href="{url}/ase/">Housekeeping</a><span></span></li>
                    <?php
                    } ?>
                </ul>
                <div id="habbos-online"><div class="rounded"><span>{online} Online!</span></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
                        <li class="selected">Home</li>
                        <li class=" last"><a href="{url}/account">Account Settings</a></li>
                    </ul>
                </div>
            </div>
            <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
                        <div class="habblet-container ">		
                            <div id="new-personal-info" style="background-image:url({url}/app/tpl/skins/Habbo/images/personal_info/hotel_views/htlview_us.png)">
                                <div class="enter-hotel-btn">
                                    <div class="open enter-btn">
                                        <a href="{url}/api.php" target="eac955c8dbc88172421193892a3e98fc7402021a" onclick="HabboClient.openOrFocus(this); return false;">Enter {hotelName} Hotel<i></i></a>
                                        <b></b>
                                    </div>
                                </div>
                                <div id="habbo-plate"><img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure={figure}.gif" alt="{username}"></div>
                                <div id="habbo-info">
                                    <div id="motto-container" class="clearfix">			
                                        <strong>{username}:</strong>
                                        <div>
                                            <span title="What's on your mind today?">{motto}</span>
                                        </div>
                                    </div>
                                    <div id="motto-links" style="display: none"><a href="#" id="motto-cancel">Cancel</a></div>
                                </div>
                                <ul id="link-bar" class="clearfix">		
                                    <li class="credits"><font color="#fff">{coins}</font> Credits</li>
                                    <li class="activitypoints"><font color="#fff">{activitypoints}</font> Pixels</li>
                                </ul>
                                <div id="habbo-feed">
                                    <ul id="feed-items">
                                        <li class="small" id="feed-lastlogin">Last Signed In: {lastSignedIn}</li>
                                    </ul>
                                </div>
                                <p class="last"></p>
                            </div>
                            <script type="text/javascript">
                                HabboView.add(function() {
                                    L10N.put("personal_info.motto_editor.spamming", "Don\'t spam me, bro!");
                                    PersonalInfo.init("");
                                });
                            </script>
                        </div>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
						
						<!-- Start of Hot Campaigns -->
						<div id="column1" class="column">
							<div class="habblet-container">
								<div class="cbb clearfix red">
									<h2 class="title">Hot Campaigns</h2>
									<p style="padding: 7px 7px 1px;">
									<?php
										$getItems = mysql_query("SELECT * FROM site_hotcampaigns WHERE enabled = '1' ORDER BY order_id ASC");
										$evenOdd = 'odd';
										while ($item = mysql_fetch_assoc($getItems))
									{
										if ($evenOdd == 'odd')
									{
										$evenOdd = 'even';
									}
										else
									{
										$evenOdd = 'odd';
									}
										echo '<li class="' . $evenOdd . '">
									
										<br />
										<div class="hotcampaign-container">
										<a href="' . $item['url'] . '">
										<div id="campaigns_image">
										<img src="' . $item['image_url'] . '" align="left" alt="' . $item['caption'] . '" /></a></img>
										</div>
										<div id="campaigns_caption">
										' . $item['caption'] . '
										</div>
										<div id="campaigns_desc">
										' . $item['desc'] . '
										</div>
										<div id="campaigns_link">
										<a href="' . $item['url'] . '"><div align="right">More Info &raquo;</div></a>
										</div>
										<br />
									</div> 
								</li> ';
								}
							?>
						</p>
					</div>
				</div>
			</div>
					<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
					</div>
				<!-- End of Hot Campaings -->
								
                    <div id="column2" class="column">
                        <div class="habblet-container "></div>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                        <div class="habblet-container news-promo">		
                            <div class="cbb clearfix notitle ">
                                <div id="newspromo">
                                    <div id="topstories">
                                        <div class="topstory" style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-1})">
                                            <h4>Latest news</h4>
                                            <h3><a href="{url}/index.php?url=news&id={newsID-1}">{newsTitle-1}</a></h3>
                                            <p class="summary">
                                                {newsCaption-1}
                                            </p>
                                            <p>
                                                <a href="{url}/index.php?url=news&id={newsID-1}">Read more &raquo;</a>
                                            </p>
                                        </div>
                                        <div class="topstory" style="background-image: url({url}/r63/c_images/Top_Story_Images/{newsIMG-2}); display: none">
                                            <h4>Latest news</h4>
                                            <h3><a href="{url}/index.php?url=news&id={newsID-2}">{newsTitle-2}</a></h3>
                                            <p class="summary">
                                                {newsCaption-2}
                                            </p>
                                            <p>
                                                <a href="{url}/index.php?url=news&id={newsID-2}">Read more &raquo;</a>
                                            </p>
                                        </div>
                                        <div id="topstories-nav" style="display: none"><a href="#" class="prev">&laquo; Previous</a><span>1</span> / 3<a href="#" class="next">Next &raquo;</a></div>
                                    </div>
                                    <ul class="widelist">
                                        <li class="even"><a href="{url}/index.php?url=news&id={newsID-1}">{newsTitle-1} &raquo;</a><div class="newsitem-date">{newsDate-1}</div></li>            
                                        <li class="odd"><a href="{url}/index.php?url=news&id={newsID-2}">{newsTitle-2} &raquo;</a><div class="newsitem-date">{newsDate-2}</div></li>            
                                        <li class="last"><a href="/news">More news &raquo;</a></li>            
                                    </ul>
                                </div>
                                <script type="text/javascript">
                                    document.observe("dom:loaded", function() { NewsPromo.init(); });
                                </script>
                            </div>
                        </div>
						
				<!-- Start of Facebook Box -->
						<div id="column2" class="column">
							<div class="habblet-container">
								<div class="cbb clearfix white">
									<p style="padding: 7px 7px 1px;">
									<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FHabbo&amp;width=292&amp;height=62&amp;show_faces=false&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
									</p>
								</div>
							</div>
						</div>
				<!-- End of Facebook Box -->
		
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			
			<!-- Start of Facebook Box -->
						<div id="column2" class="column">
							<div class="habblet-container">
								<div class="cbb clearfix blue">
									<h2 class="title">Radio</h2>
									<p style="padding: 7px 7px 1px;">
									Radio code goes here.
									</p>
								</div>
							</div>
						</div>
				<!-- End of Facebook Box --> 
				
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
				
            <script type="text/javascript">
                document.observe('dom:loaded', function() {
                    CurrentRoomEvents.init();
                });
            </script>
        </div>

        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            HabboView.run();
        </script>
		
		
		
        <!--[if lt IE 7]>
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <![endif]-->
        
        <div id="footer" >
			<?php include('footer.php'); ?>
			<?php include('checktheban.php'); ?>
        </div>
    
    </body>
</html>