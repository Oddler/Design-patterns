<?

namespace sofw\core;

/**
 * soRegistry. Шаблон "реестор". 
 *
 * @since 1.0
 */

  trait soRegistry
  {

    /**
     * @var mixed[]
     */
    protected $_aItems		= array();

    /**
     * Устанавливаем значение
     *
     * @param $sKey
     * @param mixed $Value
     *
     * @internal param $sKey1
     * @internal param string $sKey
     * @return $this
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
     * @return mixed|null
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
     * @return $this
     */
    public function array2registry($aIn, $sPrefix = '')
    {
      foreach($aIn as $key => $value)
	  {
	    $this->set($sPrefix.$key, $value);
	  }

      return $this;
	}

  }