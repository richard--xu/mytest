<?php
class Connect
{
    //数据库连接对象
    private static $connect = null;

    private function __construct(){}

    static function getInstance()
    {
        //set_exception_handler(array(__CLASS__, 'exception_handler'));
        if (!self::$connect) {
            //连接数据库
            $dbConfig      = include('config.php');
            self::$connect = new PDO("mysql:host={$dbConfig['host']};dbname={$dbConfig['database']}",
                                     "{$dbConfig['username']}",
                                     "{$dbConfig['psw']}", 
                                     array(PDO::ATTR_PERSISTENT => true)
                                 );
        }
        //restore_exception_handler();
        return self::$connect;
    }

    /**
     * 克隆
     *
     * @return void
     * @author 
     **/
    private function __clone(){}
}