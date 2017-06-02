
				<!-- Nav -->
					<nav id="nav">
						<ul>
						<?php

						if ($_SESSION['page']==="controller_users"){
							?>
							<li ><a href="index.php">Home</a></li>
							
							<li class="current" ><a href="index.php?page=controller_users&op=list">CRUD</a></li>
							<?php
							} else {
							?>
							<li  class="current"><a href="index.php">Home</a></li>
							
							<li ><a href="index.php?page=controller_users&op=list">CRUD</a></li>
							<?php
							}
							?>
						</ul>
					</nav>

			</div>