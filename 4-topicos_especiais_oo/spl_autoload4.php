<?php
$ll = new LibraryLoader;
$ll->register();

class LibraryLoader
{
  public function register()
  {
    spl_autoload_register([$this, 'loadClass']);
  }

  public static function loadClass($class)
  {
    if (file_exists("Lib/{$class}.php")) {
      require_once "Lib/{$class}.php";
      return true;
    }
  }
}
