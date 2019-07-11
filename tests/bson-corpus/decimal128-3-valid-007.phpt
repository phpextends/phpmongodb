--TEST--
Decimal128: [basx025] conform to rules and exponent will be in permitted range).
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('180000001364008F030000000000000000000000003CB000');
$canonicalExtJson = '{"d" : {"$numberDecimal" : "-9.11"}}';

// Canonical BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON 
echo json_canonicalize(toCanonicalExtendedJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON 
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
180000001364008f030000000000000000000000003cb000
{"d":{"$numberDecimal":"-9.11"}}
180000001364008f030000000000000000000000003cb000
===DONE===