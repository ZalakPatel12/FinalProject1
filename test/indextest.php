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
    public function CVS_File() {
        $this->assertCVS_File('data/03.csv');
    }

    public function testCVS_File(){
        echo file_exists('CVS_File');
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