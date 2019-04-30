<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/about/index.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/contacts/index.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Наши контакты";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Прасковейский Винзавод";
	}
?>