--TEST--
Info - Check for incorrect port no

--SKIPIF--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_skipif("Info", "testInfoNegativeForIncorrectPort");

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Info", "testInfoNegativeForIncorrectPort");
--EXPECT--
ERR_CLIENT
