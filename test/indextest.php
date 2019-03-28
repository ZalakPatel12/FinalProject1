<?php
/**
 * Created by PhpStorm.
 * User: zalakpatel
 * Date: 2019-03-28
 * Time: 09:55
 */

<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class indexest extends TestCase
{
    public function CSV_File() {
        $this->assertCSV_File('data/03.csv');
    }

    public function testCSV_File(){
        echo file_exists('CSV_File');
    }
    public function testHTML_Table(){
        echo file_exists('HTML_Table');
    }
    public function testinitialization(){
        echo file_exists('initialization');
    }

    public function testindexFile(){
        echo file_exists('index');
    }

}