<?php
class Mysql extends SQL
{
    private $user;
    private $password;
    private $host;
    private $dB;
    private $conn;
    public function	 __construct(){
        $this->user = "user1";
        $this->dB = "user1";
        $this->host = "localhost";
        $this->password = "tuser1";
    }
    public function getConn()
    {
            try
            {
                if(!isset($this->user) || !isset($this->dB) ||  !isset($this->host) || !isset( $this->password))
                {
                    throw new Exception('Something wrong with filds connect to DB mysql');
                }else
                {
                    $this->conn = mysql_connect($this->host, $this->user, $this->password);
                }
                try
                {
                    if(!mysql_select_db($this->dB))
                    {
                        throw new Exception('No DB in mysql');
                    }else
                    {
                        return true;
                    }
                }catch (Exception $x)
                {
                    echo 'Throw Exeptions: ',  $x->getMessage(), "\n";
                }
            }catch (Exception $e) {
                echo 'Throw Exeptions: ',  $e->getMessage(), "\n";
            }
        return $this->conn;
    }
    public function exec()
    {
        try
        {
            if(!$this->conn)
            {
                throw new Exception('Cant connect to mysql');
            }else
            {
                $res = parent::exec();
                try
                {
                    if(!$res || empty($res) || !isset($res))
                    {
                        throw new Exception('mysql result string error');
                    }else
                    {
                        if($this->selectVal)
                        {
                            $result =  mysql_query($res);
                            try
                            {
                                if(!$result || empty($result) || !isset($result))
                                {
                                    throw new Exception('mysql_query result error');
                                }else
                                {
                                    while ($row[] = mysql_fetch_array($result))
                                    {
                                    }
                                    try{
                                        if(empty($row))
                                        {
                                            throw new Exception('result mysql_fetch_array  error, empty $row');
                                        }else
                                        {
                                            return $row;
                                        }
                                    }catch (Exception $x)
                                    {
                                        echo $x->getMessage();
                                    }
                                }
                            }catch (Exception $v)
                            {
                                echo $v->getMessage();
                            }
                        }else if($this->insertVal)
                        {
                            mysql_query($res);
                        }else if($this->updateVal)
                        {
                            mysql_query($res);
                        }else if($this->deleteVal)
                        {
                            mysql_query($res);
                        }
                    }
                }catch (Exception $x)
                {
                    echo $x->getMessage();
                }
            }
        }catch (Exception $e)
        {
            echo 'Throw Exeptions: ',  $e->getMessage(), "\n";
        }
    }
}
