<?php
$string_to_search = "Martin OMC-28LJ";
$regex = "/OM/";
$num_matches = preg_match($regex, $string_to_search);

if ($num_matches > 0) {
  echo "Found a match!";
} else {
  echo "No match. Sorry.";
}
?>