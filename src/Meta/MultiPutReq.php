<?php
namespace Nebula\Meta;

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

class MultiPutReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'segment',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'pairs',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Nebula\Common\KeyValue',
                ),
        ),
    );

    /**
     * @var string
     */
    public $segment = null;
    /**
     * @var \Nebula\Common\KeyValue[]
     */
    public $pairs = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['segment'])) {
                $this->segment = $vals['segment'];
            }
            if (isset($vals['pairs'])) {
                $this->pairs = $vals['pairs'];
            }
        }
    }

    public function getName()
    {
        return 'MultiPutReq';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->segment);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->pairs = array();
                        $_size219 = 0;
                        $_etype222 = 0;
                        $xfer += $input->readListBegin($_etype222, $_size219);
                        for ($_i223 = 0; $_i223 < $_size219; ++$_i223) {
                            $elem224 = null;
                            $elem224 = new \Nebula\Common\KeyValue();
                            $xfer += $elem224->read($input);
                            $this->pairs []= $elem224;
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
        $xfer += $output->writeStructBegin('MultiPutReq');
        if ($this->segment !== null) {
            $xfer += $output->writeFieldBegin('segment', TType::STRING, 1);
            $xfer += $output->writeString($this->segment);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->pairs !== null) {
            if (!is_array($this->pairs)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('pairs', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->pairs));
            foreach ($this->pairs as $iter225) {
                $xfer += $iter225->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
