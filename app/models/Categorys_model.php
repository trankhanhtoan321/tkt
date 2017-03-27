<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categorys_model extends CI_Model
{
	private $_tkt_table_name = 'categorys';
	private $_tkt_fields;
	private $_tkt_primary_field;
	public function __construct()
	{
		parent::__construct();
		$this->_tkt_fields = $this->db->list_fields($this->_tkt_table_name);
		$temp = $this->db->field_data($this->_tkt_table_name);
		foreach ($temp as $temp1)
		{
		    if($temp1->primary_key)
		    {
		    	$this->_tkt_primary_field = $temp1->name;
		    	break;
		    }
		}
	}
	private function _tkt_field_exist($field)
	{
		if(is_array($this->_tkt_fields) && in_array($field, $this->_tkt_fields)) return TRUE;
		return FALSE;
	}
	/*
	return array
	$order = ASC,DESC
	*/
	public function tkt_get_list($limit=0,$offset=0,$order='ASC',$field='')
	{
		if($limit!=0)
		{
			if($offset==0)
			{
				$this->db->limit($limit);
			}
			else
			{
				$this->db->limit($limit,$offset);
			}
		}
		if($field=='')
		{
			$this->db->order_by($this->_tkt_primary_field,$order);
		}
		else
		{
			if(_tkt_field_exist($field))
			{
				$this->db->order_by($field,$order);
			}
			else
			{
				$this->db->order_by($this->_tkt_primary_field,$order);
			}
		}
		$result = $this->db->get($this->_tkt_table_name);
		return $result->result_array();
	}
	/*$data = array()*/
	public function tkt_insert($data)
	{
		$data1 = array();
		foreach($this->_tkt_fields as $field)
		{
			if($field!=$this->_tkt_primary_field && isset($data[$field]))
			{
				$data1[$field] = $data[$field];
			}
		}
		if($this->db->insert($this->_tkt_table_name,$data1))
		{
			$this->db->reset_query();
			$this->db->from($this->_tkt_table_name);
			foreach($data1 as $key => $val)
			{
				$this->db->where($key,$val);
			}
			$result = $this->db->get();
			$result = $result->result_array();
			return $result[0][$this->_tkt_primary_field];
		}
		return FALSE;
	}
	/*
	$data = array(), need include primary field
	return TRUE,FALSE
	*/
	public function tkt_update($data)
	{
		if(!isset($data[$this->_tkt_primary_field])) return FALSE;
		$data1 = array();
		foreach($this->_tkt_fields as $field)
		{
			if($field!=$this->_tkt_primary_field && isset($data[$field]))
			{
				$data1[$field] = $data[$field];
			}
		}
		$this->db->where($this->_tkt_primary_field,$data[$this->_tkt_primary_field]);
		if($this->db->update($this->_tkt_table_name,$data1)) return TRUE;
		return FALSE;
	}
	/*
	return array
	*/
	public function tkt_get($key)
	{
		$this->db->where($this->_tkt_primary_field,$key);
		$this->db->from($this->_tkt_table_name);
		$result = $this->db->get();
		$result = $result->result_array();
		if(count($result)==1) return $result[0];
		return FALSE;
	}
	/*
	return TRUE,FALSE
	*/
	public function tkt_delete($key)
	{
		if(is_array($key))
		{
			$this->db->where($this->_tkt_primary_field,$key[0]);
			for($i = 1; $i < count($key); $i++)
			{
				$this->db->or_where($this->_tkt_primary_field,$key[$i]);
			}
			if($this->db->delete($this->_tkt_table_name)) return TRUE;
			return FALSE;
		}
		else
		{
			$this->db->where($this->_tkt_primary_field,$key);
			if($this->db->delete($this->_tkt_table_name)) return TRUE;
			return FALSE;
		}
		return FALSE;
	}
	/*
	$key = array
	$order = ASC,DESC
	$field = field to search
	return array
	*/
	public function tkt_search($key,$field = '',$limit=0,$offset=0,$order='ASC',$field='')
	{
		if(self::_tkt_field_exist($field))
		{
			$this->db->like($field,$key);
			if($limit!=0)
			{
				if($offset==0)
				{
					$this->db->limit($limit);
				}
				else
				{
					$this->db->limit($limit,$offset);
				}
			}
			if($field=='')
			{
				$this->db->order_by($this->_tkt_primary_field,$order);
			}
			else
			{
				if(_tkt_field_exist($field))
				{
					$this->db->order_by($field,$order);
				}
				else
				{
					$this->db->order_by($this->_tkt_primary_field,$order);
				}
			}
			$this->db->form($this->_tkt_table_name);
			$ersult = $this->db->get();
			return $result->array();
		}
		else
		{
			$this->db->from($this->_tkt_table_name);
			if($limit!=0)
			{
				if($offset==0)
				{
					$this->db->limit($limit);
				}
				else
				{
					$this->db->limit($limit,$offset);
				}
			}
			if($field=='')
			{
				$this->db->order_by($this->_tkt_primary_field,$order);
			}
			else
			{
				if(_tkt_field_exist($field))
				{
					$this->db->order_by($field,$order);
				}
				else
				{
					$this->db->order_by($this->_tkt_primary_field,$order);
				}
			}
			$this->db->like($this->_tkt_primary_field,$key);
			foreach($this->_tkt_fields as $field)
			{
				if($field != $this->_tkt_primary_field)
				{
					$this->db->or_like($field,$key);
				}
			}
			$result = $this->db->get();
			return $result->result_array();
		}
	}
	public function tkt_count_all()
	{
		return $this->db->count_all($this->_tkt_table_name);
	}
	public function tkt_increase($key,$field)
	{
		if(self::_tkt_field_exist($field))
		{
			$this->db->select($field);
			$this->db->where($this->_tkt_primary_field,$key);
			$this->db->from($this->_tkt_table_name);
			$result = $this->db->get();
			$result = $result->result_array();
			if(count($result)!=1) return FALSE;
			$num = $result[0][$field]+1;
			$data = array();
			$data[$this->_tkt_primary_field]=$key;
			$data[$field]=$num;
			if(self::tkt_update($data)) return TRUE;
			else return FALSE;
		}
		return FALSE;
	}
}