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

class RequestCommon
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'session_id',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'plan_id',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        3 => array(
            'var' => 'profile_detail',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var int
     */
    public $session_id = null;
    /**
     * @var int
     */
    public $plan_id = null;
    /**
     * @var bool
     */
    public $profile_detail = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['session_id'])) {
                $this->session_id = $vals['session_id'];
            }
            if (isset($vals['plan_id'])) {
                $this->plan_id = $vals['plan_id'];
            }
            if (isset($vals['profile_detail'])) {
                $this->profile_detail = $vals['profile_detail'];
            }
        }
    }

    public function getName()
    {
        return 'RequestCommon';
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
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->session_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->plan_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->profile_detail);
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
        $xfer += $output->writeStructBegin('RequestCommon');
        if ($this->session_id !== null) {
            $xfer += $output->writeFieldBegin('session_id', TType::I64, 1);
            $xfer += $output->writeI64($this->session_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->plan_id !== null) {
            $xfer += $output->writeFieldBegin('plan_id', TType::I64, 2);
            $xfer += $output->writeI64($this->plan_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->profile_detail !== null) {
            $xfer += $output->writeFieldBegin('profile_detail', TType::BOOL, 3);
            $xfer += $output->writeBool($this->profile_detail);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
