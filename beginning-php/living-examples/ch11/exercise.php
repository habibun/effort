<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?php echo $pageTitle?></title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Welcome to Beginning PHP, Chapter 11, Exercise 1</h1>

<?php

define( "TOP_LEVEL_DIR", "." );

if ( isset( $_POST['posted'] ) ) {

  // Get the folder to search for
  $folderName = isset( $_POST['folderName'] ) ? $_POST['folderName'] : "";

  // Search for the folder
  echo "<p>Searching for '$folderName' in '" . TOP_LEVEL_DIR . "' ...</p>";
  $matches = array();
  searchFolder( TOP_LEVEL_DIR, $folderName, $matches );

  // Display any matches
  if ( $matches ) {
    echo "<h2>The following folders matched your search:</h2>\n<ul>\n";
    foreach ( $matches as $match ) echo ( "<li>$match</li>" );
    echo "</ul>\n";
  } else {
    echo "<p>No matches found.</p>";
  }
}

/**
* Recursively searches a directory for a subdirectory
*
* @param string The path to the directory to search
* @param string The subdirectory name to search for
* @param stringref The current list of matches
*/

function searchFolder( $current_folder, $folder_to_find, &$matches )
{
  if ( !( $handle = opendir( $current_folder ) ) ) die( "Cannot open $current_folder." );

  while ( $entry = readdir( $handle ) ) {
    if ( is_dir( "$current_folder/$entry" ) ) {
      if ( $entry != "." && $entry != ".." ) {

        // This entry is a valid folder
        // If it matches our folder name, add it to the list of matches
        if ( $entry == $folder_to_find ) $matches[] = "$current_folder/$entry";

        // Search this folder
        searchFolder( "$current_folder/$entry", $folder_to_find, $matches );
      }
    }
  }
  closedir( $handle );
}

// Display the search form
?>
    <form method="post" action="">
      <div>
        <input type="hidden" name="posted" value="true" />
        <label>Please enter the folder to search for:</label>
        <input type="text" name="folderName" />
        <input type="submit" name="search" value="Search" />
      </div>
    </form>
  </body>
</html>

