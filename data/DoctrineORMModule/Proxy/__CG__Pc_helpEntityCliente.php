<?php

namespace DoctrineORMModule\Proxy\__CG__\Pc_help\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cliente extends \Pc_help\Entity\Cliente implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'cod_cli', 'tipo_pessoa', 'maquina', 'cidade', 'nome_cliente', 'nome_empresa', 'endereco', 'bairro', 'estado', 'complemento', 'cnpj', 'ie', 'razao_social', 'cpf', 'rg', 'celular', 'telefone', 'email', 'cep', 'skype');
        }

        return array('__isInitialized__', 'cod_cli', 'tipo_pessoa', 'maquina', 'cidade', 'nome_cliente', 'nome_empresa', 'endereco', 'bairro', 'estado', 'complemento', 'cnpj', 'ie', 'razao_social', 'cpf', 'rg', 'celular', 'telefone', 'email', 'cep', 'skype');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cliente $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCodCli()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCli', array());

        return parent::getCodCli();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodCli($cod_cli)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodCli', array($cod_cli));

        return parent::setCodCli($cod_cli);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoPessoa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoPessoa', array());

        return parent::getTipoPessoa();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoPessoa($tipo_pessoa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoPessoa', array($tipo_pessoa));

        return parent::setTipoPessoa($tipo_pessoa);
    }

    /**
     * {@inheritDoc}
     */
    public function getCidade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCidade', array());

        return parent::getCidade();
    }

    /**
     * {@inheritDoc}
     */
    public function setCidade($cidade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCidade', array($cidade));

        return parent::setCidade($cidade);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeCliente', array());

        return parent::getNomeCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeCliente($nome_cliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeCliente', array($nome_cliente));

        return parent::setNomeCliente($nome_cliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeEmpresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeEmpresa', array());

        return parent::getNomeEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeEmpresa($nome_empresa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeEmpresa', array($nome_empresa));

        return parent::setNomeEmpresa($nome_empresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndereco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndereco', array());

        return parent::getEndereco();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndereco($endereco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndereco', array($endereco));

        return parent::setEndereco($endereco);
    }

    /**
     * {@inheritDoc}
     */
    public function getBairro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBairro', array());

        return parent::getBairro();
    }

    /**
     * {@inheritDoc}
     */
    public function setBairro($bairro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBairro', array($bairro));

        return parent::setBairro($bairro);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getComplemento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComplemento', array());

        return parent::getComplemento();
    }

    /**
     * {@inheritDoc}
     */
    public function setComplemento($complemento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComplemento', array($complemento));

        return parent::setComplemento($complemento);
    }

    /**
     * {@inheritDoc}
     */
    public function getCnpj()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCnpj', array());

        return parent::getCnpj();
    }

    /**
     * {@inheritDoc}
     */
    public function setCnpj($cnpj)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCnpj', array($cnpj));

        return parent::setCnpj($cnpj);
    }

    /**
     * {@inheritDoc}
     */
    public function getIe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIe', array());

        return parent::getIe();
    }

    /**
     * {@inheritDoc}
     */
    public function setIe($ie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIe', array($ie));

        return parent::setIe($ie);
    }

    /**
     * {@inheritDoc}
     */
    public function getRazaoSocial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRazaoSocial', array());

        return parent::getRazaoSocial();
    }

    /**
     * {@inheritDoc}
     */
    public function setRazaoSocial($razao_social)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRazaoSocial', array($razao_social));

        return parent::setRazaoSocial($razao_social);
    }

    /**
     * {@inheritDoc}
     */
    public function getCpf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCpf', array());

        return parent::getCpf();
    }

    /**
     * {@inheritDoc}
     */
    public function setCpf($cpf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCpf', array($cpf));

        return parent::setCpf($cpf);
    }

    /**
     * {@inheritDoc}
     */
    public function getRg()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRg', array());

        return parent::getRg();
    }

    /**
     * {@inheritDoc}
     */
    public function setRg($rg)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRg', array($rg));

        return parent::setRg($rg);
    }

    /**
     * {@inheritDoc}
     */
    public function getCelular()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCelular', array());

        return parent::getCelular();
    }

    /**
     * {@inheritDoc}
     */
    public function setCelular($celular)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCelular', array($celular));

        return parent::setCelular($celular);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefone', array());

        return parent::getTelefone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefone($telefone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefone', array($telefone));

        return parent::setTelefone($telefone);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getCep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCep', array());

        return parent::getCep();
    }

    /**
     * {@inheritDoc}
     */
    public function setCep($cep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCep', array($cep));

        return parent::setCep($cep);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkype', array());

        return parent::getSkype();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkype($skype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkype', array($skype));

        return parent::setSkype($skype);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaquina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaquina', array());

        return parent::getMaquina();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaquina($maquina)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaquina', array($maquina));

        return parent::setMaquina($maquina);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

}
