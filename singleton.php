<?

namespace sofw\core;

/**
 * soSingleton. Паттерн одиночка
 *
 * @since 1.0
 */
 
/*  class soSingleton
  {
    protected static $_instance			= NULL;
    
    final public static function getInstance()
    {
      $class = get_called_class();
      if (!isset(self::$_instance[$class])) {
        self::$_instance[$class] = new $class( func_get_args() );
      }
      return self::$_instance[$class];
	}
  }*/