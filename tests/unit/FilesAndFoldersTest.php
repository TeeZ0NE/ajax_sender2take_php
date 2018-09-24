<?php

use PHPUnit\Framework\TestCase;

class FilesAndFoldersTest extends TestCase
{
	/**
	 * @test
	 */
	public function is_temp_file_exists()
	{
		$this->assertGreaterThan(0, tmpfile());
	}

	/**
	 * @test
	 * @return resource
	 */
	public function open_file_csv()
	{
		$path = '/var/www/html/ajax-sender/logs/tophosting_23.08.2018.stat.csv';
		$this->assertEquals('tophosting_23.08.2018',basename($path,'.stat.csv'));
		$f_p = fopen($path, 'rt') or 0;
		$this->assertGreaterThan(0, $f_p);
		return $f_p;
	}

	/**
	 * @test-
	 * @depends open_file_csv
	 * @param resource $f_p
	 */
	public function read_csv($f_p)
	{
//		$this->assertNotEmpty(fgetcsv($f_p, null, ';'));
		while(($data=fgetcsv($f_p,null,';'))!==false){
			var_export($data);
			echo ftell($f_p).PHP_EOL;
		}
		$this->assertTrue(feof($f_p));
	}

	/**
	 * @test
	 * @depends open_file_csv
	 * @param resource $f_p
	 */
	public function is_file_closed($f_p)
	{
		$this->assertTrue(fclose($f_p));
	}
	/**
	 * @test
	 */
	
}
