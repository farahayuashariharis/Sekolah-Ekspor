<?php
class User
{
    public $name;
    public $username;
    protected $birthdate = '02 Oktober 2001';
    private $address = 'makassar';
    protected $gender = 'Male';

    public function showSalam(){
        echo "Hai, nama saya $this->name <br/>";
    }
}

class Bio extends User
{
    public $birthdate = '02 Oktober 2001';

    public function showBio(){
        echo "Username : $this->username <br/>";
        echo "Birthdate : $this->birthdate <br/>";
        echo "Gender : $this->gender <br/>";
    }

    public function showAddress(){
        echo "Address : $this->address";
    }
}

$myBio = new Bio();

$myBio->name = 'Anne';
$myBio->username = 'anne';
$myBio->gender = 'Female';

echo $myBio->username . '<br/>';
echo $myBio->gender;
echo $myBio->birthdate . '<br/>';

$myBio->showSalam();
$myBio->showBio();
$myBio->showAddress();