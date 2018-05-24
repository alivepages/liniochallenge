<?php
namespace  Linio\Challenge;
include('autoloader.php');

$sequence = new SequenceWithReplace(100);
$replacers = array (
  new Replacer(5, "IT"),
  new Replacer(3, "Linio"),
  new Replacer(15, "Linianos")
);
$replaceAll = new ReplaceAll($sequence, $replacers);
$replacedSequence = $replaceAll->getReplacedSequence();
$sequenceOutputter = new SequenceOutputter($replacedSequence);

$result = $sequenceOutputter->toText();
echo $result;

/* -------------------------------------------------------------
* comprobation with direct result
* --------------------------------------------------------------
*/
$comprobationResult = substr(
  implode (
    array_replace(
      range(0, 100),
      array_combine (range(3, 99, 3), array_fill(0, 33, 'Linio')),
      array_combine (range(5, 100, 5), array_fill(0, 20, 'IT')),
      array_combine (range(15, 90, 15), array_fill(0, 6, 'Linianos'))
    )
  ), 1
);

echo '<br>' . $comprobationResult;

/*
if ($result === $comprobationResult) {
  echo '<br> ok!';
}
*/
