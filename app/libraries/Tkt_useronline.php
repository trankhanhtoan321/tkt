<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tkt_useronline
{
	private $_ftotal;
	private $_fmonth;
	private $_ftoday;
	private $_fyesterday;
	private $_today;
	private $_month;
	private $_total;
	private $_yesterday;
	private $_CI;
	public function __construct()
	{
		$this->_CI =& get_instance();
		$this->_fmonth = "app/libraries/useronline/".date("Y-m",time()).".txt";
		$this->_ftoday = "app/libraries/useronline/".date("Y-m-d",time()).".txt";
		$this->_fyesterday = "app/libraries/useronline/".date("Y-m-d",time()-86400).".txt";
		$this->_ftotal = "app/libraries/useronline/total.txt";
		/*_____________________________________________________________________*/
		if (!file_exists($this->_fyesterday))
		{
			$f = fopen($this->_fyesterday, "w");
			fwrite($f,"0");
			fclose($f);
		}
		if (!file_exists($this->_fmonth))
		{
			$f = fopen($this->_fmonth, "w");
			fwrite($f,"0");
			fclose($f);
		}
		if (!file_exists($this->_ftoday))
		{
			$f = fopen($this->_ftoday, "w");
			fwrite($f,"0");
			fclose($f);
		}
		if (!file_exists($this->_ftotal))
		{
			$f = fopen($this->_ftotal, "w");
			fwrite($f,"0");
			fclose($f);
		}
		/*______________________________________________________________________*/
		$f = fopen($this->_fmonth,"r");
		$this->_month = fread($f, filesize($this->_fmonth));
		fclose($f);
		$f = fopen($this->_ftoday,"r");
		$this->_today = fread($f, filesize($this->_ftoday));
		fclose($f);
		$f = fopen($this->_fyesterday,"r");
		$this->_yesterday = fread($f, filesize($this->_fyesterday));
		fclose($f);
		$f = fopen($this->_ftotal,"r");
		$this->_total = fread($f, filesize($this->_ftotal));
		fclose($f);
		/*____________________________________________________________________*/
		if(!$this->_CI->session->has_userdata('hasvisited'))
		{
			$this->_CI->session->set_userdata('hasvisited','yes');

			$this->_total++;
			$this->_month++;
			$this->_today++;

			$f = fopen($this->_fmonth, "w");
			fwrite($f, $this->_month);
			fclose($f);

			$f = fopen($this->_ftotal, "w");
			fwrite($f, $this->_total);
			fclose($f);

			$f = fopen($this->_ftoday, "w");
			fwrite($f, $this->_today);
			fclose($f);
		}
	}
	public function tkt_get_today()
	{
		return $this->_today;
	}
	public function tkt_get_yesterday()
	{
		return $this->_yesterday;
	}
	public function tkt_get_month()
	{
		return $this->_month;
	}
	public function tkt_get_total()
	{
		return $this->_total;
	}
}