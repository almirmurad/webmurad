<?php

class User{
    private $id, $name, $email, $password, $nivel, $nickName;

        public function setId($id){
            if(empty($id) or is_numeric($id)){
                $this->id = $id;
            }else{
                echo 'o Id precisa ser numérico!';
            }
        }
        
        public function setName($name)
        {
            if(is_string($name)){
                $this->name = $name;
            }else{
                echo 'O nome de usuário deve conter somente letras!';
            }
        }

        public function setEmail($email){
            $this->email = $email;
        }
        
        public function setPass($password){
            $this->password = $password;
        }
        
        public function setNivel($nivel){
            if(is_numeric($nivel)){
                $this->nivel = $nivel;
               }else{
               echo "<script>alert('Nível de acesso precisa ser númerico');</script>";
           }
        }
        
        public function setNick($nickName){
            $this->nickName = $nickName;
        }
        
        
  

    public function getName(){
        return $this->name;
    }

    public function getMail(){
        return $this->email;
    }

    public function getNick(){
        return $this->nickName;
    }

    public function getPass(){
        return $this->password;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function cadastra(){

    }


}


$id= '';
$name= '     Rafaela Fernanda Murad Lucano     ';
$email= 'rafaela.lucano@gmail.com';
$password='juan10';
$nivel= 1;
$nickName = 'rafinha_fofinha';



$user1 = new User();
$user1->setId($id);
$user1->setName(strtolower(trim($name)));
$user1->setEmail($email);
$user1->setPass(sha1($password));
$user1->setNivel($nivel);
$user1->setNick($nickName);

/* echo'<pre>';
print_r($user1);
echo'</pre>';
*/


print '<pre> Olá '. strtoupper($user1->getName()).' seja bem vinda!<br>
Seu nome de usuário é: '.$user1->getNick().'<br>
Seu email é: '.$user1->getMail().'<br>
Sua senha de acesso é: '.$user1->getPass().'<br>
Seu nível de acesso é o :'.$user1->getNivel().'</pre>';

