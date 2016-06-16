<?php
include('Connect.php');
class Model
{
    protected $connection = null;

    /**
     * 构造函数
     *
     * @return void
     * @author richard
     **/
    public function __construct()
    {
        $this->connection = Connect::getInstance();
    }

    /**
     * 获取数据库连接对象
     *
     * @return void
     * @author richard
     **/
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * 获取一条数据
     *
     * @return void
     * @author richard
     **/
    public function getRow()
    {
        return $this->connection;
    }

    /**
     * 获取一列数据
     *
     * @return void
     * @author richard
     **/
    public function getRows()
    {
        return $this->connection;
    }

    /**
     * 获取数据库连接对象
     *
     * @return void
     * @author richard
     **/
    public function update()
    {
        return $this->connection;
    }

    /**
     * 获取数据库连接对象
     *
     * @return void
     * @author richard
     **/
    public function add()
    {
        return $this->connection;
    }

    /**
     * 获取数据库连接对象
     *
     * @return void
     * @author richard
     **/
    public function delete()
    {
        return $this->connection;
    }

    /**
     * 执行数据库操作
     *
     * @param string $sql sql语句
     * @return resource
     * @author richard
     **/
    public function query($sql)
    {
        return $this->connection->query($sql);
    }
}