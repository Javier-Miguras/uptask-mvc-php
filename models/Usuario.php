<?php

namespace Model;

class Usuario extends ActiveRecord{
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'email', 'password', 'token', 'confirmado'];

    public $id;
    public $nombre;
    public $email;
    public $password;
    public $token;
    public $confirmado;
    public $password2;
    public $password_actual;
    public $password_nuevo;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->password_actual = $args['password_actual'] ?? '';
        $this->password_nuevo = $args['password_nuevo'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? 0;
    }

    public function validarLogin(){
        
        if(!$this->email){
            self::$alertas['error'][] = 'Debes ingresar un email';
        }elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            self::$alertas['error'][] = 'Email no válido';
        }

        if(!$this->password){
            self::$alertas['error'][] = 'Debes ingresar un password';
        }

        return self::$alertas;

    }

    public function validarNuevaCuenta()
    {
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre es obligatorio';
        }

        if(!$this->email){
            self::$alertas['error'][] = 'Debes ingresar un email';
        }

        if(!$this->password){
            self::$alertas['error'][] = 'Debes ingresar un password';
        }elseif(strlen($this->password) < 6){
            self::$alertas['error'][] = 'El password debe contener como mínimo 6 caracteres';
        }

        if($this->password !== $this->password2){
            self::$alertas['error'][] = 'Los passwords son diferentes';
        }



        return self::$alertas;
    }

    public function validarPassword(){
        if(!$this->password){
            self::$alertas['error'][] = 'Debes ingresar un password';
        }elseif(strlen($this->password) < 6){
            self::$alertas['error'][] = 'El password debe contener como mínimo 6 caracteres';
        }

        return self::$alertas;
    }

    public function validar_perfil(){
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre es obligatorio';
        }

        if(!$this->email){
            self::$alertas['error'][] = 'El email es obligatorio';
        }

        return self::$alertas;
    }

    public function nuevo_password() : array{

        
        if(!$this->password_actual){
            self::$alertas['error'][] = 'Debes ingresar tu password';
        }
        if(!$this->password_nuevo){
            self::$alertas['error'][] = 'Debes ingresar un nuevo password';
        }elseif(strlen($this->password_nuevo) < 6 ){
            self::$alertas['error'][] = 'El password debe contener un mínimo de 6 caracteres';
        }

        return self::$alertas;
    }

    public function comprobar_password() : bool{
        return password_verify($this->password_actual, $this->password);
    }

    public function hashPassword() : void{
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken() : void{
        $this->token = md5(uniqid());
    }

    public function validarEmail(){
        if(!$this->email){
            self::$alertas['error'][] = 'El Email es obligatorio';
        }

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            self::$alertas['error'][] = 'Email no válido';
        }

        return self::$alertas;
    }

}