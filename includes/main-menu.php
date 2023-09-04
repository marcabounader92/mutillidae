<?php
	$lUserIDString = "";
	if($_SESSION['loggedin'] == "True"){
	    $lUserIDString = "&uid=" . $lUserID;
	} //end if
?>

<div id="smoothmenu1" class="ddsmoothmenu">
	<ul>
		<li>
			<a href="">OWASP 2017</a>
			<ul>
				<li>
					<a href="">A1 - Injection (SQL)</a>
					<ul>
						<li>
							<a href="">SQLi - Extract Data</a>
							<ul>
								<li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
							</ul>
						</li>
						<li>
							<a href="">SQLi - Bypass Authentication</a>
							<ul>
								<li><a href="index.php?page=login.php">Login</a></li>
							</ul>
						</li>
						<li>
							<a href="">SQLi - Insert Injection</a>
							<ul>
								<li><a href="?page=add-to-your-blog.php">Add to your blog</a></li>
								<li><a href="index.php?page=register.php">Register</a></li>
								<li><a href="index.php?page=captured-data.php">View Captured Data</a></li>
							</ul>
						</li>
						<li>
							<a href="">Blind SQL via Timing</a>
							<ul>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
							</ul>
						</li>
						<li>
							<a href="">SQLMAP Practice</a>
							<ul>
								<li><a href="index.php?page=sqlmap-targets.php">SQLMAP Practice Targets</a></li>
								<li><a href="index.php?page=login.php">Login</a></li>
								<li><a href="index.php?page=view-someones-blog.php">View Someones Blog</a></li>
								<li><a href="index.php?page=user-info.php">User Info (SQL)</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via JavaScript Object Notation (JSON)</a>
							<ul>
								<li><a href="index.php?page=pen-test-tool-lookup.php">Pen Test Tool Lookup</a></li>
								<li><a href="index.php?page=pen-test-tool-lookup-ajax.php">Pen Test Tool Lookup (AJAX)</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via SOAP Web Service</a>
							<ul>
								<li><a href="./webservices/soap/ws-user-account.php">Lookup User</a></li>
							</ul>
						</li>
						<li>
							<a href="">Via REST Web Service</a>
							<ul>
								<li><a href="./webservices/rest/ws-user-account.php">User Account Management</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_Ten" target="_blank">
						OWASP Top Ten
					</a>
				</li>
				<li>
					<a href="https://addons.mozilla.org/en-US/firefox/collections/jdruin/pro-web-developer-qa-pack/" target="_blank">
					Web Penetration Testing Add-Ons
					</a>
				</li>
			</ul>
		</li>
	</ul>
</div>
