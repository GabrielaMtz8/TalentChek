<?php
class Usuario
{
    public int $id;
    public string $nombre;
    public string $apellido;
    public string $correo;
    public string $contrasena;
    public ?string $cv; // Puede ser null si aún no se sube el CV

    public function __construct(
        int $id = 0,
        string $nombre = "",
        string $apellido = "",
        string $correo = "",
        string $contrasena = "",
        ?string $cv = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->cv = $cv;
    }

    public function valida()
    {
        if ($this->nombre === "") {
            throw new Exception("Falta el nombre.");
        }
        if ($this->apellido === "") {
            throw new Exception("Falta el apellido.");
        }
        if ($this->correo === "") {
            throw new Exception("Falta el correo electrónico.");
        }
        if (!filter_var($this->correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El correo electrónico no es válido.");
        }
        if ($this->contrasena === "") {
            throw new Exception("Falta la contraseña.");
        }
    }
}
