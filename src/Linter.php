<?php

namespace PSRLinter;

class Linter
{
	public function check($code) {
		if (!$this->isGood($code)) {
			$this->showError();
		}
	}

	public function isGood($code) {
		if ($code === 'good') {
			return true;
		} else {
			return false;
		}
	}

	private function showError() {
		echo "warning 	code is bad\n";
	}
}