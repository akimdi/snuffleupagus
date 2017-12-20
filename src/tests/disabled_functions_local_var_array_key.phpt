--TEST--
Disable functions - match on an array value buried in several levels
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_disabled_functions_local_var_array_key.ini
--FILE--
<?php
function foo($arr) {
	 echo $arr["a"]."\n";
}
$a=Array("test2"=>Array("pof"=>"pif", "foo"=>Array("lol"=>"bbb")), "a"=>"cccc");
foo($a);

$a=Array("test2"=>Array("foo"=>Array("aaa"=>"ccc")), "a"=>"dddd");
foo($a);
?>
--EXPECTF--
cccc
[snuffleupagus][0.0.0.0][disabled_function][drop] The call to the function 'foo' in %a/tests/disabled_functions_local_var_array_key.php:3 has been disabled.
