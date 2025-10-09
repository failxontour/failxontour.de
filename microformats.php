<?php

namespace YourApp;

require '/vendor/autoload.php';

use Mf2;

// (Above code (or equivalent) assumed in future examples)

$mf = Mf2\fetch('http://microformats.org');

// $mf is either a canonical mf2 array, or null on an error.
if (is_array($mf)) {
  foreach ($mf['items'] as $microformat) {
    // Note: in real code, never assume that a property exists, or that a particular property value is a string!
    echo "A {$microformat['type'][0]} called {$microformat['properties']['name'][0]}\n";
  }
}
