<?php

function similarity(array $vec1, array $vec2) {
    return _dotProduct($vec1, $vec2) / (_absVector($vec1) * _absVector($vec2));
}
  
function _dotProduct(array $vec1, array $vec2) {
    $result = 0;
    
    foreach (array_keys($vec1) as $key1) {
      foreach (array_keys($vec2) as $key2) {
	if ($key1 === $key2) $result += $vec1[$key1] * $vec2[$key2];
      }
    }
    return $result;
}
  
function _absVector(array $vec) {
    $result = 0;
    foreach (array_values($vec) as $value) {
      $result += $value * $value;
    }    
return sqrt($result);
}


//collection of documents
$collection=array();

$mysqli = new mysqli("localhost", "root","","project");

$userquery = $mysqli->query("SELECT * FROM projectlist");


	while ($row = mysqli_fetch_row($userquery))
	{
		$projectid=(int)$row[0];
		//echo $projectid."\n";
		$collection[$projectid]=$row[2];
		//echo $projectid.":".$collection[$projectid]."\n \n";
	}
	
	foreach($collection as $id => $doc)
	{
		//echo $id.":".$doc."\n";
	}

	
	
$dictionary = array();
$termmapping=array();
$docCount = array();

$count=0;

foreach($collection as $docID => $doc) {
    $terms = preg_split('/[\ \n\,]+/', $doc);
    $docCount[$docID] = count($terms);

    foreach($terms as $term) {
		$term=strtolower($term);
        if(!isset($dictionary[$term])) {
			$termmapping[$term]=$count;
			$count++;
            $dictionary[$term] = array('df' => 0, 'postings' => array());
        }
        if(!isset($dictionary[$term]['postings'][$docID])) {
            $dictionary[$term]['df']++;
            $dictionary[$term]['postings'][$docID] = array('tf' => 0);
        }

        $dictionary[$term]['postings'][$docID]['tf']++;
    }
}


$noOfterms=count($termmapping);
$noOfDocs=count($collection);
$vectors=array(array());

foreach($collection as $doc=>$document)//($doc=0;$doc<$noOfDocs;$doc++)
{
	$docterms=preg_split('/[\ \n\,]+/',$collection[$doc]);
	foreach($docterms as $term)
	{
		$term=strtolower($term);
		if($dictionary[$term]['df']!=0)
		{
				$vectors[$doc][$termmapping[$term]]=($dictionary[$term]['postings'][$doc]['tf'])*(log($noOfDocs/$dictionary[$term]['df'],2));		
		}
		else
		{			
		$vectors[$doc][$termmapping[$term]]=0;	
		}
	}
	//echo $doc."\n".$vectors[$doc][$termmapping[$term]];
}



$mysqli = new mysqli("localhost", "root","","project");

foreach($collection as $doc => $docu)
{
	//echo $doc.':'.$docu;
	$results=array();
	foreach($collection as $doc1 => $docu)
	{
		$results[$doc1]=similarity($vectors[$doc],$vectors[$doc1]);		
	}
	
	arsort($results);
	
	$count=0;
	foreach($results as $doc3 => $score)
	{
		
		//echo $doc3.",".$score."\n";
		//echo "........................................................";
			if($count>2)
			{
				break;
			}
			else
			{
			$userquery = "INSERT INTO recommendation (sourceid,targetid,similarity) VALUES($doc,$doc3,$score)";	
			
				if($mysqli->query($userquery)==true)
				{
					//echo "success";
				}
				else
				{
					//echo "fail";
	
				}			
			
			}
			$count++;
	}
}

//$userquery = $mysqli->query("INSERT projectId FROM history Where username= '$username'");		
	
//$target="machine learning and the SCIENCE of DATA";

/*$collection = array(
	0 => $target,
    1 => 'live earth position in the universe',
    2 => 'cloud computing and the leverages are the technical',
    3 => 'big data so what are the advantages of the data science'
);


$dictionary = array();
$termmapping=array();
$docCount = array();

$count=0;

foreach($collection as $docID => $doc) {
    $terms = explode(' ', $doc);
    $docCount[$docID] = count($terms);

    foreach($terms as $term) {
		$term=strtolower($term);
        if(!isset($dictionary[$term])) {
			$termmapping[$term]=$count;
			$count++;
            $dictionary[$term] = array('df' => 0, 'postings' => array());
        }
        if(!isset($dictionary[$term]['postings'][$docID])) {
            $dictionary[$term]['df']++;
            $dictionary[$term]['postings'][$docID] = array('tf' => 0);
        }

        $dictionary[$term]['postings'][$docID]['tf']++;
    }
}

$noOfterms=count($termmapping);
$noOfDocs=count($collection);
$vectors=array(array());

for($doc=0;$doc<$noOfDocs;$doc++)
{
	$docterms=preg_split('/[\ \n\,]+/',$collection[$doc]);
	foreach($docterms as $term)
	{
		$term=strtolower($term);
		if($dictionary[$term]['df']!=0)
		{
				$vectors[$doc][$termmapping[$term]]=($dictionary[$term]['postings'][$doc]['tf'])*(log($noOfDocs/$dictionary[$term]['df'],2));		
		}
		else
		{			
		$vectors[$doc][$termmapping[$term]]=0;	
		}
	}
}

$result=array();
for($doc=1;$doc<$noOfDocs;$doc++)
{
	$result[$doc]=similarity($vectors[0],$vectors[$doc]);
}

for($i=0;$i<2;$i++)
{
	$index=1;
	for($j=2;$j<$noOfDocs;$j++)
	{
		if($result[$j]>$result[$index])
		{
			$index=$j;
		}
	}
	echo $collection[$index]."\n , ";
	$result[$index]=-1;
}*/
?>
 
 
 
 
 
 
 
  
