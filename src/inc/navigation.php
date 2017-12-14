			<ul class="navigation">
					<?php 
					foreach($navigation as $item){
						echo "<li class='navigation__item'><a href=$item[link]>$item[title]</a></li>";
						}
					 ?>
				</ul>