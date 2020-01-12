<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2021001107631192",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "MIIEogIBAAKCAQEAgHXUDpFMh0la6iQ8sSWy3QI/bhKxKc3TNVs+DYA+uznO18pcbMRqwXAc2zYleWH2pcNBEsNtBRt2BhbiAKImZozcBwdcZyLgsiyNXFDoym4yUvFU6c/TusujQPWCHacWuR4VdfWmkKTpDRtmPvP4ZLvpA/IQ69DXeyky3hsk1zXKaplljelDBA7b40hCQ8ybWVzU20yIFphMJWCD0h/oBVCL6DZ9OtF33YC62BCPYOc/emHR9vth83MiErwUwqnr3gsAheBl0QQXYg8SFswYkMfDiStqjl6nvIcooS5DStrey/0QlTlt9LNgMjVZ8TGsrkGHI26fTiSyIKXuqIJtVQIDAQABAoIBADs4Fl3w1Zq4UlUGB4SSoHYKBzuzGkDvRaKfQWfv6vtcluIbw6fQlHZAPM1BlNz0MEQSUvlXZfaoxivgeKdaGOHFpdkHp61UAsmgiDo6glZvnntmDYML78t4/PWBOE57LJqCJ9qNOBAONfF45BW5WpT1m2HaQbq0N+HrCCwjz0P2O6bX4Ry+PSPopoGMgXwVTflmvAUNPm+rUKk3y6kJDfrHSx8NFigV1fXvxYEbKIXxrr78Sc5N9nz4oqoRQpriS/3dkuwSc3ih2idvmTYKUPBOmA/AgHpgeKQLofwLDEmv5uwgbby2SAgAl4YgkFRliOuGXMmgQbe/dSslkmYAlTECgYEAzbJ0JE7BwJz2Z4eYkY7OtXN9bYX4AKEvdR4kL0c3VWiNWMuql5aPhPrfjRqt+/bbsb7EndEpnvRiuS+FU0CNLN478JYuDGrcfQfY92RDvywGLW6iaj9zrfd6v01pvMmR3ku/4ZOXij4NNs9iA1qmTNajcdZXOtHuMIEz6bDC3BMCgYEAn+ACNYOgFm7GNSlUFV3cbWqYSEnUWNjOJVGG7E/krupEUanzIJtgo6S5jZWFM5ZKsSVwUlM9MsmE8JNTqV/n4Zp8qOKaHncofpUanGUoM3piaM039YofUOgGSxi/8mqtJyxs0pF6Qubf67XL/xDrUQ45/ft3Wfpjvy+SlAmEbfcCgYBbCHs2BlThNZYnQ29WG+mHjFEaQ4v6W1txbaF9+vqWJetIPPqGk+94Xr7I5+HP/PRFubOyVHsjCe0XH9zVd2ADV2cXlp9Sh4iFHQ/8jLceyBED0k62ztYXS8tbFpuRHXQc+VE2N+d9GvEmLKmn6lpm7ybunnmEYpwTg1rCNaRHWQKBgFLVmc9oV3XIB2Jb+3jmnOMEK8qoliFCk+y6BRJDgtUuBB/b0mC+oJ+pJYq6Qb2szR5jq4K8JiU+TGbprps/WcGGbbiDUB8g1hZf4t3Ne7rQWlS6n5fU7MzaqwgV1r4fj3+QgQHI5nPrc3GJTBzoA0SH/nwd4oT4Ot5AI84X8EmZAoGAdMgltuycI8Em3gF285JfT0SlYGEEfmGWl5nid4D4zNwMdrcwdFknED6ELspABXQK+bZmMmoqd3BDsNIjW+w0TyRFAWjfiRZ9ggfWGvjQYSfsROWLGtbx2dChYEr5EjZRUCKzYa52NK2IKjvsKVB3hPB761RqMjS/AoON5l9cMe0=",
		
		//异步通知地址
		'notify_url' => "",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgHXUDpFMh0la6iQ8sSWy3QI/bhKxKc3TNVs+DYA+uznO18pcbMRqwXAc2zYleWH2pcNBEsNtBRt2BhbiAKImZozcBwdcZyLgsiyNXFDoym4yUvFU6c/TusujQPWCHacWuR4VdfWmkKTpDRtmPvP4ZLvpA/IQ69DXeyky3hsk1zXKaplljelDBA7b40hCQ8ybWVzU20yIFphMJWCD0h/oBVCL6DZ9OtF33YC62BCPYOc/emHR9vth83MiErwUwqnr3gsAheBl0QQXYg8SFswYkMfDiStqjl6nvIcooS5DStrey/0QlTlt9LNgMjVZ8TGsrkGHI26fTiSyIKXuqIJtVQIDAQAB",
		
	
);