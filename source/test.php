<?php
use PHPUnit\Framework\TestCase;
include ('DataHelper.php');

class TestDataHelper extends TestCase
{
    public function testConnection() 
    {
        $dataHelper = new DataHelper();
        $connection = $dataHelper->getConnection();
        $this->assertEquals('mysqli', get_class($connection));
    }

    public function testShowDatabases()
    {
        $dataHelper = new DataHelper();
        $dbList = $dataHelper->showDatabases();
        $this->assertEquals(3, $dbList);
    }
}