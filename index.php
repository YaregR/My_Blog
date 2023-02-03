<?php

require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/navbar.php');

?>


<?php
$page = 'home';

if(isset($_GET['p'])) {
	switch ($_GET['p']) {
		case 'home':
			$page = 'home';
			break;		
		case 'about':
			$page = 'about';
			break;
		case 'portfolio':
			$page = 'portfolio';
			break;
		case 'blog-grid':
			$page = 'blog-grid';
			break;
		case 'blog-single':
			$page = 'blog-single';
			break;
		case 'contact':
			$page = 'contact';
			break;
		case 'login':
			$page = 'login';
			break;
		case 'register':
			$page = 'register';
			break;
		case 'logout':
			$page = 'logout';
			break;
		default:
			$page = 'home';
			break;
	}
}

require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/' . $page . '.php');

?>



<?php

require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');

?>