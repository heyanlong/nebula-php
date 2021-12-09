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

class ListEdgesReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'space_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var int
     */
    public $space_id = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['space_id'])) {
                $this->space_id = $vals['space_id'];
            }
        }
    }

    public function getName()
    {
        return 'ListEdgesReq';
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
                        $xfer += $input->readI32($this->space_id);
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
        $xfer += $output->writeStructBegin('ListEdgesReq');
        if ($this->space_id !== null) {
            $xfer += $output->writeFieldBegin('space_id', TType::I32, 1);
            $xfer += $output->writeI32($this->space_id);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
