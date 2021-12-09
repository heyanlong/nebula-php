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

class GetPropRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'space_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'parts',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::I32,
            'vtype' => TType::LST,
            'key' => array(
                'type' => TType::I32,
            ),
            'val' => array(
                'type' => TType::LST,
                'etype' => TType::STRUCT,
                'elem' => array(
                    'type' => TType::STRUCT,
                    'class' => '\Nebula\Common\Row',
                    ),
                ),
        ),
        3 => array(
            'var' => 'vertex_props',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Nebula\Storage\VertexProp',
                ),
        ),
        4 => array(
            'var' => 'edge_props',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Nebula\Storage\EdgeProp',
                ),
        ),
        5 => array(
            'var' => 'expressions',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Nebula\Storage\Expr',
                ),
        ),
        6 => array(
            'var' => 'dedup',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        7 => array(
            'var' => 'order_by',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Nebula\Storage\OrderBy',
                ),
        ),
        8 => array(
            'var' => 'limit',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        9 => array(
            'var' => 'filter',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'common',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Storage\RequestCommon',
        ),
    );

    /**
     * @var int
     */
    public $space_id = null;
    /**
     * @var array
     */
    public $parts = null;
    /**
     * @var \Nebula\Storage\VertexProp[]
     */
    public $vertex_props = null;
    /**
     * @var \Nebula\Storage\EdgeProp[]
     */
    public $edge_props = null;
    /**
     * @var \Nebula\Storage\Expr[]
     */
    public $expressions = null;
    /**
     * @var bool
     */
    public $dedup = false;
    /**
     * @var \Nebula\Storage\OrderBy[]
     */
    public $order_by = null;
    /**
     * @var int
     */
    public $limit = null;
    /**
     * @var string
     */
    public $filter = null;
    /**
     * @var \Nebula\Storage\RequestCommon
     */
    public $common = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['space_id'])) {
                $this->space_id = $vals['space_id'];
            }
            if (isset($vals['parts'])) {
                $this->parts = $vals['parts'];
            }
            if (isset($vals['vertex_props'])) {
                $this->vertex_props = $vals['vertex_props'];
            }
            if (isset($vals['edge_props'])) {
                $this->edge_props = $vals['edge_props'];
            }
            if (isset($vals['expressions'])) {
                $this->expressions = $vals['expressions'];
            }
            if (isset($vals['dedup'])) {
                $this->dedup = $vals['dedup'];
            }
            if (isset($vals['order_by'])) {
                $this->order_by = $vals['order_by'];
            }
            if (isset($vals['limit'])) {
                $this->limit = $vals['limit'];
            }
            if (isset($vals['filter'])) {
                $this->filter = $vals['filter'];
            }
            if (isset($vals['common'])) {
                $this->common = $vals['common'];
            }
        }
    }

    public function getName()
    {
        return 'GetPropRequest';
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
                case 2:
                    if ($ftype == TType::MAP) {
                        $this->parts = array();
                        $_size95 = 0;
                        $_ktype96 = 0;
                        $_vtype97 = 0;
                        $xfer += $input->readMapBegin($_ktype96, $_vtype97, $_size95);
                        for ($_i99 = 0; $_i99 < $_size95; ++$_i99) {
                            $key100 = 0;
                            $val101 = array();
                            $xfer += $input->readI32($key100);
                            $val101 = array();
                            $_size102 = 0;
                            $_etype105 = 0;
                            $xfer += $input->readListBegin($_etype105, $_size102);
                            for ($_i106 = 0; $_i106 < $_size102; ++$_i106) {
                                $elem107 = null;
                                $elem107 = new \Nebula\Common\Row();
                                $xfer += $elem107->read($input);
                                $val101 []= $elem107;
                            }
                            $xfer += $input->readListEnd();
                            $this->parts[$key100] = $val101;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->vertex_props = array();
                        $_size108 = 0;
                        $_etype111 = 0;
                        $xfer += $input->readListBegin($_etype111, $_size108);
                        for ($_i112 = 0; $_i112 < $_size108; ++$_i112) {
                            $elem113 = null;
                            $elem113 = new \Nebula\Storage\VertexProp();
                            $xfer += $elem113->read($input);
                            $this->vertex_props []= $elem113;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->edge_props = array();
                        $_size114 = 0;
                        $_etype117 = 0;
                        $xfer += $input->readListBegin($_etype117, $_size114);
                        for ($_i118 = 0; $_i118 < $_size114; ++$_i118) {
                            $elem119 = null;
                            $elem119 = new \Nebula\Storage\EdgeProp();
                            $xfer += $elem119->read($input);
                            $this->edge_props []= $elem119;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->expressions = array();
                        $_size120 = 0;
                        $_etype123 = 0;
                        $xfer += $input->readListBegin($_etype123, $_size120);
                        for ($_i124 = 0; $_i124 < $_size120; ++$_i124) {
                            $elem125 = null;
                            $elem125 = new \Nebula\Storage\Expr();
                            $xfer += $elem125->read($input);
                            $this->expressions []= $elem125;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->dedup);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::LST) {
                        $this->order_by = array();
                        $_size126 = 0;
                        $_etype129 = 0;
                        $xfer += $input->readListBegin($_etype129, $_size126);
                        for ($_i130 = 0; $_i130 < $_size126; ++$_i130) {
                            $elem131 = null;
                            $elem131 = new \Nebula\Storage\OrderBy();
                            $xfer += $elem131->read($input);
                            $this->order_by []= $elem131;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->limit);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->filter);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRUCT) {
                        $this->common = new \Nebula\Storage\RequestCommon();
                        $xfer += $this->common->read($input);
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
        $xfer += $output->writeStructBegin('GetPropRequest');
        if ($this->space_id !== null) {
            $xfer += $output->writeFieldBegin('space_id', TType::I32, 1);
            $xfer += $output->writeI32($this->space_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->parts !== null) {
            if (!is_array($this->parts)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('parts', TType::MAP, 2);
            $output->writeMapBegin(TType::I32, TType::LST, count($this->parts));
            foreach ($this->parts as $kiter132 => $viter133) {
                $xfer += $output->writeI32($kiter132);
                $output->writeListBegin(TType::STRUCT, count($viter133));
                foreach ($viter133 as $iter134) {
                    $xfer += $iter134->write($output);
                }
                $output->writeListEnd();
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->vertex_props !== null) {
            if (!is_array($this->vertex_props)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('vertex_props', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->vertex_props));
            foreach ($this->vertex_props as $iter135) {
                $xfer += $iter135->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->edge_props !== null) {
            if (!is_array($this->edge_props)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('edge_props', TType::LST, 4);
            $output->writeListBegin(TType::STRUCT, count($this->edge_props));
            foreach ($this->edge_props as $iter136) {
                $xfer += $iter136->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->expressions !== null) {
            if (!is_array($this->expressions)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('expressions', TType::LST, 5);
            $output->writeListBegin(TType::STRUCT, count($this->expressions));
            foreach ($this->expressions as $iter137) {
                $xfer += $iter137->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dedup !== null) {
            $xfer += $output->writeFieldBegin('dedup', TType::BOOL, 6);
            $xfer += $output->writeBool($this->dedup);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->order_by !== null) {
            if (!is_array($this->order_by)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('order_by', TType::LST, 7);
            $output->writeListBegin(TType::STRUCT, count($this->order_by));
            foreach ($this->order_by as $iter138) {
                $xfer += $iter138->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->limit !== null) {
            $xfer += $output->writeFieldBegin('limit', TType::I64, 8);
            $xfer += $output->writeI64($this->limit);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->filter !== null) {
            $xfer += $output->writeFieldBegin('filter', TType::STRING, 9);
            $xfer += $output->writeString($this->filter);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->common !== null) {
            if (!is_object($this->common)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('common', TType::STRUCT, 10);
            $xfer += $this->common->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
