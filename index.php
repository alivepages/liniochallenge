<?php
namespace  Linio\Challenge;
include('autoloader.php');

$sequence = new SequenceWithReplace(100);
$replaceers = array (
  new Replaceer(5, "1xIT"),
  new Replaceer(3, "1xLinio"),
  new Replaceer(15, "1xLinianos")
);
$replaceAll = new ReplaceAll($sequence, $replaceers);
$replacedSequence = $replaceAll->getReplacedSequence();
$sequenceOutputter = new SequenceOutputter($replacedSequence);

echo $sequenceOutputter->toText();
