<?php

namespace Send\Sms;

class SmsService {

	public function sendSms($appId, $appSecret, $appPassphrase) {

		$result = ['sms_service_provider' => config('sms.PROVIDER_URI'), 'app_id' => $appId, 'app_secret' => $appSecret, 'app_passphrase' => $appPassphrase];

		return response()->json($result);

	}

}