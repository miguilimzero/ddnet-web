---
layout: default
title: DDraceNetwork
head: <link rel="stylesheet" href="funding/jquery-ui-1.8.22.custom.css" />
menu: |
  <ul>
    <li><a href="/#news">News</a></li>
    <li><a href="/server/">Server&nbsp;Features</a></li>
    <li><a href="/client/">Client&nbsp;Features</a></li>
    <li><a href="/map/">Map&nbsp;Features</a></li>
    <li><a href="/howto/">How&nbsp;to&nbsp;Map</a></li>
    <li><a href="/binds/">Useful&nbsp;Binds</a></li>
    <li><a href="/settingscommands/">Settings&nbsp;&amp;&nbsp;Commands</a></li>
    <li><a href="/staff/">Staff&nbsp;&amp;&nbsp;Contact</a></li>
    <li><a href="/funding/">Funding</a></li>
  </ul>
---
<div class="block">
<h2>DDRace Servers and much more!</h2>
<p>
DDraceNetwork (DDNet) is an actively maintained version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification with a unique cooperative gameplay. Help each other play through <a href="/releases/">custom maps</a> with up to 64 players, compete against the best in <a href="/tournaments/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are located in Germany, USA, Canada, Russia, China, Chile, Brazil, South Africa and Iran. All <a href="/ranks/">ranks</a> made on official servers are available worldwide and you can <a href="/players/milk">collect points</a>!
</p>
<!--<div class="video-container"><iframe id="jsclient" class="ytplayer" src="http://teewebs.net/"></iframe></div><div align="right"><a href="http://teewebs.net/">DDnet JS client by eeeee</a></div>
<script src="/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).click(function() { $("#jsclient").focus() });
$(document).ready(function() { $("#jsclient").focus() });
</script>-->
<div class="startvideo"><div class="video-container"><iframe allowfullscreen class="ytplayer" src="http://www.youtube.com/embed/M5hsBsN6HKM?autoplay=0&hd=1"></iframe></div></div>
<div class="startimages"><a href="https://www.youtube.com/watch?v=JObJvGL_2IA"><img class="demo" alt="Demo" src="8.png"/></a><a href="locations.png"><img class="demo" alt="Demo" src="locations.png"/></a></div>
<!--<div class="startvideo"><div class="video-container"><iframe src="http://hitbox.tv/#!/embed/Hallowed1986" frameborder="0" allowfullscreen></iframe></div></div>
<div class="startimages"><iframe height="400" src="http://www.hitbox.tv/embedchat/Hallowed1986" frameborder="0" allowfullscreen></iframe></div>-->
<!--<object id="live_embed_player_flash" width="800" height="450" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="flashvars" value="hostname=de.twitch.tv&amp;channel=weeelf&amp;auto_play=true&amp;start_volume=25" /><param name="src" value="http://de.twitch.tv/widgets/live_embed_player.swf?channel=weeelf" /><embed id="live_embed_player_flash" width="800" height="450" type="application/x-shockwave-flash" src="http://de.twitch.tv/widgets/live_embed_player.swf?channel=weeelf" allowFullScreen="true" allowScriptAccess="always" allowNetworking="all" flashvars="hostname=de.twitch.tv&amp;channel=weeelf&amp;auto_play=true&amp;start_volume=25" bgcolor="#000000" /></object><iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel=weeelf&#038;popout_chat=true" height="450" width="300"></iframe>-->
<br/>
<div class="download"><img class="download-button" src="download.svg"/>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() {
  global $user_agent;
  $os_platform = "unk";

  if (preg_match('/android/i', $user_agent))
    $os_platform = 'and';
  elseif (preg_match('/wow64/i', $user_agent))
    $os_platform = 'win64';
  elseif (preg_match('/win64/i', $user_agent))
    $os_platform = 'win64';
  elseif (preg_match('/windows/i', $user_agent))
    $os_platform = 'win32';
  elseif (preg_match('/linux.*x86_64/i', $user_agent))
    $os_platform = 'lin64';
  elseif (preg_match('/linux.*i686/i', $user_agent))
    $os_platform = 'lin32';
  elseif (preg_match('/macintosh|mac os/i', $user_agent))
    $os_platform = 'mac';

  return $os_platform;
}

$user_os = getOS();
$version = '7.9.1';

if ($user_os == 'win32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win32.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (32bit)</a></span><br/><a href="/downloads/">Other systems and versions</a> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
} elseif ($user_os == 'win64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win64.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (64bit)</a></span><br/><a href="/downloads/">Other systems and versions</a> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
} elseif ($user_os == 'mac') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-osx.dmg">Download DDraceNetwork Client &amp; Server ' . $version . ' for Mac OS X</a></span><br/><a href="/downloads/">Other systems and versions</a> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
} elseif ($user_os == 'lin32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86.tar.gz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86</a></span><br/><a href="/downloads/">Other systems and versions</a> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
} elseif ($user_os == 'lin64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86_64.tar.gz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86_64</a></span><br/><a href="/downloads/">Other systems and versions</a> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
} elseif ($user_os == 'and') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '.apk">Download DDraceNetwork Client ' . $version . ' for Android</a></span><br/><a href="/downloads/">Other systems and versions</a> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
} else {
  print '<p class="download"><span class="big"><a href="/downloads/">Download DDraceNetwork Client &amp; Server ' . $version . '</a></span> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
}
?>

<div class="right">
  <a href="/funding/"><div class="progressbar" id="funding-total" style="width: 20em;"><div class="progress-label"></div></div></a>
  <script src="/jquery.js" type="text/javascript"></script>
  <script src="funding/jquery-ui-1.8.22.custom.min.js" type="text/javascript"></script>
  {% include funding.html %}
</div>
</div>
<br/>
</div>
<div class="block">
<h2 id="news">News</h2>
<ul>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&p=19036">The History of DDNet</a></li>
  <li><strong>DDNet 7.9.1</strong>:<br/>
  <ul>
    <li>[Client] Show all recorders at top of scoreboard</li>
    <li>[Client] Sort players in server browser by name too</li>
    <li>[Client] Fix statboard for some resolutions</li>
    <li>[Client] Fix saving of favorite IPv6 servers (by east)</li>
    <li>[Client] Fix demo cutter to add .demo file ending</li>
    <li>[Client] Improved German translations (by DoNe)</li>
    <li>[Mapping] Add many nice mapres to the client (thanks to Soreu)</li>
    <li>[Mapping] Improved grass_main/0.7 automappers (by hi_leute_gll)</li>
    <li>[Mapping] Rename mapres to have consistent names</li>
    <li>[Editor] Scroll speedup angles by 45° (finer with shift)</li>
    <li>[Editor] Fix: Show degrees sign in values selector</li>
    <li>[Server] Veto right for players with high time (20 minutes) to stop map change votes</li>
    <li>[Server] Only allow /save when team is started already to prevent saving after noobfilter</li>
    <li>[Server] Make /map and /mapinfo work for maps with really similar names</li>
    <li>[Server] Show nice messages to known bot clients</li>
    <li>[Server] Fix /map and /mapinfo with special unicode characters</li>
    <li>[Server] Fix: Only disallow team changing/killing when calling kick/spec votes</li>
    <li>[Server] Fix: Vote callers never count as afk</li>
    <li>[Compilation] Use system libraries by default when available (should enable building DDNet on any platform and OS)</li>
  </ul></li>
  <li>DDNet Persian is returning thanks to <a href="/players/KinG/">KinG</a> and <a href="http://www.teecity.ir/">Persian Tee City Staff</a>!</li>
  <li>DDNet South Africa on new host!</br>
After we had lots of connection problems on our last host, we now have a new server in South Africa, thanks to lordtheuns!</li>
  <li><a href="/funding/">DDNet Funding</a></li>
  <li><strong>DDNet 7.8.2</strong>:<br/>
  <ul>
    <li>[Client] 64bit Windows version available</li>
    <li>[Client] Fix: Error out on invalid UTF-8 strings (by heinrich5991)</li>
    <li>[Client] Add size variable for clan plates</li>
    <li>[Client] Fix: Make TAB always work in serverbrowser</li>
    <li>[Client] More reasonable default key bindings</li>
    <li>[Editor] Highlight game layers</li>
    <li>[Editor] Make a few value selectors wrap around</li>
    <li>[Editor] Display local time in editor so mappers don't lose track of it</li>
    <li>[Server] Add sv_rescue_delay and rename sv_allow_rescue to sv_rescue</li>
    <li>[Server] Update unicode confusable detection</li>
  </ul></li>
  <li><strong>DDNet 7.8</strong>:<br/>
  <ul>
    <li>[Client] Add automatic antiping based on ping</li>
    <li>[Client] Add support to show clan above name plates</li>
    <li>[Client] Improve Android client</li>
    <li>[Client] Show full time in scoreboard even when minutes are over 100</li>
    <li>[Client] Fix autorecorder again (by east)</li>
    <li>[Client] Better Polish translations (by Savander and Lady Saavik)</li>
    <li>[Client] Add Catalan translations (by Ryozuki)</li>
    <li>[Editor] Ctrl-s doesn't ask about overwriting anymore</li>
    <li>[Mapping] Improved grass_main and round-tiles automapper rules (by hi_leute_gll)</li>
    <li>[Server] If no rcon password is set, generate one (by heinrich5991)</li>
    <li>[Server] /mapinfo shows release dates now</li>
    <li>[Server] Fix excessive name/skin changing</li>
    <li>[Server] Hopefully fix problem where timeout code sometimes doesn't work</li>
  </ul></li>
  <li>Useful binds to show more of chat when you start chatting:<br/>
    <pre>bind t "+show_chat; chat all"
bind y "+show_chat; chat team"
bind i "+show_chat; chat all /c "</pre></li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=6&t=1637">DDNet Code of Conduct</a></li>
</ul>
</div>
