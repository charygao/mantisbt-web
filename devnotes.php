<?php include( "top.php" ); ?>

<span class="page_title">Developer Notes</span>
<hr size=1 noshade width="100%">
<p>
If you wish to join the development team please <a href="mailto:kenito@300baud.org">email me</a>.  Before you are accepted you will need to hang around the project for several weeks on the mailing lists and/or on IRC.  We will also be evaluating the quality of any patches you submit.

<!--

UPDATE CONTENT

<p>
Here are some notes that should help people understand the way Mantis is layed out.
<p>
<ul>
	<li><a href="images/dg_menu.gif">Menu overview</a> <?php echo round(filesize("images/dg_menu.gif") / 1024) ?>KB
	<li><a href="images/dg_login.gif">Login procedure</a> <?php echo round(filesize("images/dg_login.gif") / 1024) ?>KB
	<li><a href="images/dg_viewbug.gif">View bug overview</a> <?php echo round(filesize("images/dg_viewbug.gif") / 1024) ?>KB
	<li><a href="images/dg_manage.gif">Manage overview</a> <?php echo round(filesize("images/dg_manage.gif") / 1024) ?>KB
	<li><a href="images/dg_overview.gif">Detailed complete overview</a> <?php echo round(filesize("images/dg_overview.gif") / 1024) ?>KB
</ul>
-->

<p>
Mantis roughly divides into the following modules:
<ul>
	<li>Account Management
	<li>Account Profile Management
	<li>Account Preference Management
	<li>Authentication
	<li>Bug Reporting
	<li>Bug Updating
	<li>Bug Viewing
	<li>Bugnotes
	<li>Database Access
	<li>Documentation
	<li>Email Notification
	<li>Icons
	<li>Localization
	<li>News Management
	<li>Project Management
	<li>String Manipulation
	<li>Summary
	<li>User Management
</ul>

<p>
Mantis is lacking in the following areas:
<ul>
	<li>Reporting (printable format, weekly/monthly progress charts, line graphs, bar charts, PDF exporting)
	<li>Logging
	<li>Database Abstraction
	<li>Full Search
	<li>Multiple Authentication
	<li>User Defined Input Fields
</ul>

<p>
Some cool features that could be implemented:
<ul>
	<li>IM integration (ICQ/Jabber/etc)
	<li>NNTP mirroring (send to newsgroups)
	<li>email control/front-end
</ul>

<?php include( "bot.php" ); ?>