<?php

/** 
 * @author thiagovalentim
 * 
 * 
 */
class pa {
	private $constant;
	private $sequence;
	private $n;
	private $sn;
	
	public function __construct(array $s) {
		$this->sequence = $s;
	}
	
	public function getConstant() {
		$this->constant = ($this->sequence[0] - $this->sequence[1])/(1-2);
		return $this->constant;
	}
	
	public function getN($n) {
		$this->n = $this->sequence[0] + (($n -1) * $this->getConstant());
		return $this->n;
	}
	
	public function sumN($n) {
		if(!array_key_exists(($n-1), $this->sequence)){
			$n = $this->getN($n);
		}
		$this->sn = (($this->sequence[0] + $this->sequence[($n-1)])*$n)/2;
		return $this->sn;
	}
	
}