<?php 


if(@$_POST['name'] !="" && @$_POST['url'] !="")
{
	$name = @$_POST['name'];	
	$url =  @$_POST['url'];

	$xml = new DomDocument("1.0","UTF-8");
	$xml->load('projects.xml');

	$rootTag = $xml->getElementsByTagName('projects')->item(0);

	$infoTag = $xml->createElement('project');
		$nameTag = $xml->createElement('name',$name);
		$urlTag = $xml->createElement('url',$url);

		$infoTag->appendChild($nameTag);
		$infoTag->appendChild($urlTag);

	$rootTag->appendChild($infoTag);
	$save = $xml->save("projects.xml");




	if ($save) {
		header("Location: index.php?m=saved&a=success");
	}

}else
{
	header("Location: index.php?m=error");
}
