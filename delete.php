<?php 

if (isset($_GET['delete'])) {
	
	$nameTag = $_GET['delete'];

	$xml = new DomDocument("1.0","UTF-8");
	$xml->load('projects.xml');

	$xpath = new DOMXPATH($xml);

	foreach ($xpath->query("/projects/project[name = '$nameTag']") as $node) 
	{
		$node->parentNode->removeChild($node);
	}

	$xml->formatoutput = true;
	$save = $xml->save("projects.xml");
	if ($save) {
		header("Location: index.php?m=deleted&a=warning");
	}
}else{
	echo "Error";
}


