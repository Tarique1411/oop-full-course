<?php

class Database 
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "oop";
    private $mysqli = "";
    private $result = array();
    private $conn = false;

    public function __construct()
    {
        if(!$this->conn)
        {
            $this->mysqli = new mysqli($this->host,$this->user,$this->password,$this->db);
            $this->conn = true;
            if($this->mysqli->connect_error)
            {
                array_push($this->result,$this->mysqli->connect_error);
                return false;               
            }
        }
        else
        {
            return true;
        }
    }

    // Function to Insert In Database
    public function insert($table,$params = array())
    {
        if($this->tableExist($table))
        {
            // print_r($params);
            $tableColums = implode(',',array_keys($params));
            $tableValues = implode("','",$params);
            $sql = "INSERT INTO $table ($tableColums) VALUES ('$tableValues')";
            if($this->mysqli->query($sql))
            {
                array_push($this->result,$this->mysqli->insert_id);
                return true;
                
            }
            else
            {
                array_push($this->result,$this->mysqli->error);
                return false;

            }
        }
        else
        {
            return false;
        }
    }

    // Function to update row in Database
    public function update($table,$params = array(),$where = null)
    {
        if($this->tableExist($table))
        {
            // print_r($params);
            $args = array();
            foreach ($params as $key => $value) {
                $args[] = "$key =  '$value' ";
            }
            // print_r($args);

            $sql = "UPDATE $table SET ". implode(',',$args);
            if($where !=null)
            {
                $sql .= "WHERE $where";
            }
            if($this->mysqli->query($sql))
            {
                array_push($this->result,$this->mysqli->affected_rows);
            }
            else
            {
                array_push($this->result,$this->mysqli->error);
            }


        }
        else
        {
            return false;

        }

    }

    // Function to delete table or row(s) from Databse


    public function delete($table,$where =null)
    {
        if($this->tableExist($table))
        {
            $sql = "DELETE FROM $table";
            if($where !=null)
            {
                $sql .= " WHERE $where";
                // echo $sql;
            }
            if($this->mysqli->query($sql))
            {
                array_push($this->result,$this->mysqli->affected_rows);
            }
            else
            {
                array_push($this->result,$this->mysqli->error);
            }
        }

    }

    //Function to SELECT from Database

    public function select($table, $rows = "*", $join = null, $where = null, $order = null, $limit=null )
    {
        if($this->tableExist($table))
        {
            $sql = "SELECT $rows FROM $table";
            if($join != null)
            {
                $sql .= " JOIN $join";

            }
            if($where != null)
            {
                $sql .= " WHERE $where";

            }
            if($order != null)
            {
                $sql .= " ORDER BY $order";

            }
            if($limit != null)
            {
                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                }
                else
                {
                    $page = 1;
                }
                $start = ($page -1) * $limit;
                $sql .= " LIMIT $start, $limit";

            }
            echo $sql;

            $query = $this->mysqli->query($sql);

            if($query)
            {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }
            else
            {
                array_push($this->result,$this->mysqli->error);
                return false;
            }

        }
        else
        {
            return false;
        }

    }
    public function pagination($table, $join = null, $where = null, $limit=null)
    {
        if($this->tableExist($table))
        {
            if($limit != null)
            {
                $sql = "SELECT COUNT(*) FROM $table";
                if($where !=null)
                {
                    $sql .= " WHERE $where";
                }
                if($join !=null)
                {
                    $sql .= " JOIN $join";
                }

                $query = $this->mysqli->query($sql);
                $total_record = $query->fetch_array();
                // echo '<pre>'; print_r($total_record);
                 $total_record = $total_record[0];
                 $total_page = ceil($total_record / $limit);

                 $url = basename($_SERVER['PHP_SELF']);

                 if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                }
                else
                {
                    $page = 1;
                }

                $output = "<ul class='pagination' >";
                if($page>1)
                {
                    $output .= "<li><a href='$url?page=".($page - 1)."' >Prev</a></li>";

                }

                if($total_record > $limit)
                {
                    for ($i = 1; $i <= $total_page; $i++) 
                    { 
                        if($i == $page)
                        {
                            $cls = "class='active'";

                        }
                        else
                        {
                            $cls = "";

                        }
                        $output .= "<li><a $cls href='$url?page=$i' >$i</a></li>";

                        
                    }
                                    
                }
                if($total_page > $page)
                    {
                        $output .= "<li><a href='$url?page=".($page + 1)."' >Next</a></li>";
    
                    }
                
                $output .= "</ul>";
                echo $output;
            }
            else
            {
                return false;
            }

        }
        else
        {
            return false;
        }

    }
    public function sql($sql)
    {
        $query = $this->mysqli->query($sql);

        if($query)
        {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;

        }
        else
        {
            array_push($this->result,$this->mysqli->error);
            return false;

        }

    }

    // Common Method
    private function tableExist($table)
    {
        $sql = "SHOW TABLES FROM $this->db LIKE  '$table' ";
        $tableInDb = $this->mysqli->query($sql);

        if($tableInDb)
        {
            if($tableInDb->num_rows == 1 )
            {
                return true;
            }
            else
            {
                array_push($this->result,$table." Table Does Not Exist In Databse");
                return false;
            }
        }

    }
    public function getResult()
    {
        $var = $this->result;
        $this->result = array();
        return $var;
    }

    // Close connection

    public function __destruct()
    {
        if($this->conn)
        {
            if($this->mysqli->close())
            {
                $this->conn = false;
                return true;
            }
        }
        else
        {
            return false;
        }

    }
}