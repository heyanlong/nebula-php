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

class KVGetResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'result',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Storage\ResponseCommon',
        ),
        2 => array(
            'var' => 'key_values',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var \Nebula\Storage\ResponseCommon
     */
    public $result = null;
    /**
     * @var array
     */
    public $key_values = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['result'])) {
                $this->result = $vals['result'];
            }
            if (isset($vals['key_values'])) {
                $this->key_values = $vals['key_values'];
            }
        }
    }

    public function getName()
    {
        return 'KVGetResponse';
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
                    if ($ftype == TType::STRUCT) {
                        $this->result = new \Nebula\Storage\ResponseCommon();
                        $xfer += $this->result->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::MAP) {
                        $this->key_values = array();
                        $_size407 = 0;
                        $_ktype408 = 0;
                        $_vtype409 = 0;
                        $xfer += $input->readMapBegin($_ktype408, $_vtype409, $_size407);
                        for ($_i411 = 0; $_i411 < $_size407; ++$_i411) {
                            $key412 = '';
                            $val413 = '';
                            $xfer += $input->readString($key412);
                            $xfer += $input->readString($val413);
                            $this->key_values[$key412] = $val413;
                        }
                        $xfer += $input->readMapEnd();
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
        $xfer += $output->writeStructBegin('KVGetResponse');
        if ($this->result !== null) {
            if (!is_object($this->result)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('result', TType::STRUCT, 1);
            $xfer += $this->result->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->key_values !== null) {
            if (!is_array($this->key_values)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('key_values', TType::MAP, 2);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->key_values));
            foreach ($this->key_values as $kiter414 => $viter415) {
                $xfer += $output->writeString($kiter414);
                $xfer += $output->writeString($viter415);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
