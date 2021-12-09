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

class ListenerInfo
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'type',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\Nebula\Meta\ListenerType',
        ),
        2 => array(
            'var' => 'host',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Common\HostAddr',
        ),
        3 => array(
            'var' => 'part_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        4 => array(
            'var' => 'status',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\Nebula\Meta\HostStatus',
        ),
    );

    /**
     * @var int
     */
    public $type = null;
    /**
     * @var \Nebula\Common\HostAddr
     */
    public $host = null;
    /**
     * @var int
     */
    public $part_id = null;
    /**
     * @var int
     */
    public $status = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['type'])) {
                $this->type = $vals['type'];
            }
            if (isset($vals['host'])) {
                $this->host = $vals['host'];
            }
            if (isset($vals['part_id'])) {
                $this->part_id = $vals['part_id'];
            }
            if (isset($vals['status'])) {
                $this->status = $vals['status'];
            }
        }
    }

    public function getName()
    {
        return 'ListenerInfo';
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
                        $xfer += $input->readI32($this->type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->host = new \Nebula\Common\HostAddr();
                        $xfer += $this->host->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->part_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->status);
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
        $xfer += $output->writeStructBegin('ListenerInfo');
        if ($this->type !== null) {
            $xfer += $output->writeFieldBegin('type', TType::I32, 1);
            $xfer += $output->writeI32($this->type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->host !== null) {
            if (!is_object($this->host)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('host', TType::STRUCT, 2);
            $xfer += $this->host->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->part_id !== null) {
            $xfer += $output->writeFieldBegin('part_id', TType::I32, 3);
            $xfer += $output->writeI32($this->part_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->status !== null) {
            $xfer += $output->writeFieldBegin('status', TType::I32, 4);
            $xfer += $output->writeI32($this->status);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
