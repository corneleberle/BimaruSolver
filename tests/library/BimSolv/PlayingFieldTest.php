<?php

class PlayingFieldTest extends PHPUnit_Framework_TestCase
{
	public function testGetSize()
	{
		$pf = new BimSolv_PlayingField(10);
		$this->assertEquals(10, $pf->getSize(), "Size not as expected");
	}

	public function testGetGivenShipCountOfRow()
	{
		$shipCounts = array(1, 2);
		
		$pf = new BimSolv_PlayingField(2);
		$pf->setGivenShipCountOfRows($shipCounts);
		
		for ($i = 0; $i < count($shipCounts); $i++)
		{
			$this->assertEquals($shipCounts[$i], $pf->getGivenShipCountOfRow($i));
		}
	}

	public function testGetGivenShipCountOfColumns()
	{
		$shipCounts = array(5, 6);
		
		$pf = new BimSolv_PlayingField(2);
		$pf->setGivenShipCountOfColumns($shipCounts);
		
		for ($i = 0; $i < count($shipCounts); $i++)
		{
			$this->assertEquals($shipCounts[$i], $pf->getGivenShipCountOfColumns($i));
		}
	}
}