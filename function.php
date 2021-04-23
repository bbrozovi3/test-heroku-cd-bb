<?php
define('DB_SERVER','remotemysql.com');
define('DB_USER','GNm3A9ZktI');
define('DB_PASS' ,'TiDQJfw091');
define('DB_NAME', 'GNm3A9ZktI');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

// for username availblty
public function usernameavailblty($username) {
$result =mysqli_query($this->dbh,"SELECT username FROM bruno_b WHERE username='$username'");
return $result;

}

// Function for registration
	public function registration($name,$username,$email,$password)
	{
	$ret=mysqli_query($this->dbh,"insert into bruno_b(name,username,email,password) values('$name','$username','$email','$password')");
	return $ret;
	}

// Function for signin
public function signin($username,$password)
	{
	$result=mysqli_query($this->dbh,"select id,name from bruno_b where username='$username' and password='$password'");
	return $result;
	}


}
?>