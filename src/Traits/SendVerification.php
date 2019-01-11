<?php

namespace Send\Sms\Trait;

use Send\Sms\SmsService;

trait SendVerification {

	public function verificationcode() {

		SmsService::sendSms($this->appId, $this->appSecret, $this->appPassphrase);

	}

}