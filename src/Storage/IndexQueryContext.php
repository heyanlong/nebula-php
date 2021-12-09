<?php
namespace Nebula\Storage;

/**
 * Autogenerated by Thrift Compiler (0.15.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class IndexQueryContext
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'index_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'filter',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'column_hints',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Nebula\Storage\IndexColumnHint',
                ),
        ),
    );

    /**
     * @var int
     */
    public $index_id = null;
    /**
     * @var string
     */
    public $filter = null;
    /**
     * @var \Nebula\Storage\IndexColumnHint[]
     */
    public $column_hints = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['index_id'])) {
                $this->index_id = $vals['index_id'];
            }
            if (isset($vals['filter'])) {
                $this->filter = $vals['filter'];
            }
            if (isset($vals['column_hints'])) {
                $this->column_hints = $vals['column_hints'];
            }
        }
    }

    public function getName()
    {
        return 'IndexQueryContext';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->index_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->filter);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->column_hints = array();
                        $_size298 = 0;
                        $_etype301 = 0;
                        $xfer += $input->readListBegin($_etype301, $_size298);
                        for ($_i302 = 0; $_i302 < $_size298; ++$_i302) {
                            $elem303 = null;
                            $elem303 = new \Nebula\Storage\IndexColumnHint();
                            $xfer += $elem303->read($input);
                            $this->column_hints []= $elem303;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('IndexQueryContext');
        if ($this->index_id !== null) {
            $xfer += $output->writeFieldBegin('index_id', TType::I32, 1);
            $xfer += $output->writeI32($this->index_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->filter !== null) {
            $xfer += $output->writeFieldBegin('filter', TType::STRING, 2);
            $xfer += $output->writeString($this->filter);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->column_hints !== null) {
            if (!is_array($this->column_hints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('column_hints', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->column_hints));
            foreach ($this->column_hints as $iter304) {
                $xfer += $iter304->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
