
				<!-- Nav -->
					<nav id="nav">
						<ul>
						<?php

						if ($_SESSION['page']==="homepage"){
								?>
									<li  class="current"><a href="index.php">Home</a></li>
									
									<li ><a href="index.php?page=controller_users&op=list">CRUD</a></li>

									<li ><a href="index.php?page=controller_login&op=entrar">Login</a></li>
								<?php
							}

						if ($_SESSION['page']==="controller_users"){
								?>
									<li ><a href="index.php">Home</a></li>
									
									<li class="current" ><a href="index.php?page=controller_users&op=list">CRUD</a></li>

									<li ><a href="index.php?page=controller_login&op=entrar">Login</a></li>
								<?php
							} 

						
						if ($_SESSION['page']==="controller_login"){
								?>
									<li  ><a href="index.php">Home</a></li>
									
									<li ><a href="index.php?page=controller_users&op=list">CRUD</a></li>

									<li class="current"><a href="index.php?page=controller_login&op=entrar">Login</a></li>
								<?php
							}	
						?>
						</ul>
					</nav>

			</div>