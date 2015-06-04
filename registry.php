<?

namespace sofw\core;

/**
 * soRegistry. Шаблон "реестор". 
 *
 * @since 1.0
 */

  trait soRegistry
  {
    protected $_aItems		= array();

    /**
	* Устанавливаем значение
	* 
	* @param string $sKey
	* @param mixed $Value
	* 
	* @return
	*/
    public function set($sKey, $Value)
    {
      $this->_aItems[$sKey] = $Value;
      
      return $this;
	}

    /**
	* Получаем значение
	* 
	* @param string $sKey
	* @param mixed $DefValue
	* 
	* @return
	*/
    public function get($sKey, $DefValue = NULL)
    {
      return isset($this->_aItems[$sKey])?$this->_aItems[$sKey]:$DefValue;
	}
	
    /**
	* Переводим массив в реестор
	* 
	* @param array $aIn
	* @param string $sPrefix
	* 
	* @return
	*/
    public function array2registry($aIn, $sPrefix = '')
    {
      foreach($aIn as $key => $value)
	  {
	    $this->set($sPrefix.$key, $value);
	  }
	}
	
    /**
	* Возвращает все записи, начинающиеся с префикса, в виде массива 
	* 
	* @param string $sPrefix
	* 
	* @return array
	*/
/*    public function getByPrefix($sPrefix)
    {
      $aRet = array();
      foreach($this->_aItems as $key => $value)
	  {
	    //$this->set($sPrefix.$key, $value);
	    if(strpos($key, $sPrefix) === 0)
		{
		  $aRet[$key] = $value;
		}
	  }
	  
	  return $aRet;
	}*/

  }