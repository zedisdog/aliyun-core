<?php

namespace Dezsidog\AliyunSDK\Core\Auth;

interface ISigner
{
	public function  getSignatureMethod();
	
	public function  getSignatureVersion();
	
	public function signString($source, $accessSecret); 
}