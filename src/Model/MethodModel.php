<?php

namespace rusty\lumenGenerator\Model;

use rusty\lumenGenerator\Exception\ValidationException;
use rusty\lumenGenerator\Model\Traits\AbstractModifierTrait;
use rusty\lumenGenerator\Model\Traits\AccessModifierTrait;
use rusty\lumenGenerator\Model\Traits\DocBlockTrait;
use rusty\lumenGenerator\Model\Traits\FinalModifierTrait;
use rusty\lumenGenerator\Model\Traits\StaticModifierTrait;

/**
 * Class PHPClassMethod
 * @package rusty\lumenGenerator\Model
 */
class MethodModel extends BaseMethodModel
{
    use AbstractModifierTrait;
    use AccessModifierTrait;
    use DocBlockTrait;
    use FinalModifierTrait;
    use StaticModifierTrait;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $returnType;

    /**
     * MethodModel constructor.
     * @param string $name
     * @param string $access
     */
    public function __construct($name, $access = 'public', $type = 'lumen')
    {
        $this->setName($name)
            ->setAccess($access);

        $this->type = $type;
    }

    /**
     * {@inheritDoc}
     */
    public function toLines()
    {
        $lines = [];
        if ($this->docBlock !== null) {
            $lines = array_merge($lines, $this->docBlock->toLines());
        }

        $function = '';
        if ($this->final) {
            $function .= 'final ';
        }
        if ($this->abstract) {
            $function .= 'abstract ';
        }
        $function .= $this->access . ' ';
        if ($this->static) {
            $function .= 'static ';
        }

        if($this->type === 'lumen') {
            $function .= 'function ' . $this->name . '(' . $this->renderArguments() . ')';
        } else {
            $function .= $this->name . '(' . $this->renderArguments() . ')'. $this->renderReturnType() .' {';
        }
        
        if ($this->abstract) {
            $function .= ';';
        }

        $lines[] = $function;
        if (!$this->abstract) {
            if($this->type === 'lumen') {
                $lines[] = '{';
            }
                

            if ($this->body) {
                $lines[] = sprintf('    %s', $this->body); // TODO: make body renderable
            }
            $lines[] = '}';
        }

        return $lines;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnType()
    {
        return $this->body;
    }

    /**
     * @param string $returnType
     *
     * @return $this
     */
    public function setReturnType($returnType)
    {
        $this->returnType = $returnType;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    protected function validate()
    {
        if ($this->abstract and ($this->final or $this->static)) {
            throw new ValidationException('Entity cannot be abstract and final or static at the same time');
        }

        return parent::validate();
    }


    protected function renderReturnType() 
    {
        if($this->returnType) {
            return ': '. $this->returnType;
        } else {
            return '';
        }
    }
}
