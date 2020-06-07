# Changelog

Version and feature control

## v0.2

* Installed Symfony 5.1 - Doc: https://symfony.com/doc/current/index.html
* Installed doctrine - Doc: https://symfony.com/doc/current/doctrine.html
* Created Generic entity with setters and getters
* Create /generic to manage generic logs entities

```
Example POST data:

{
	"application": "hugyourartist",
	"level": 0,
	"environment": "dev",
	"scope": "API_PAYPAL",
	"filename": "index.php",
	"line": 10,
	"debugBackTrace": "array(0) {}",
	"session": "90j48gj398gj3948j0013j23j02f3",
	"client": "{UserAgent: Google Chrome}",
	"exception": "NoException",
	"error": "VALIDATOR_ERROR",
	"message": "An error was thrown",
	"vars": "{a: b, c: d}",
	"eventTrace": "[validated, error validation]",
	"observations": "Testing post request"
}
```

## v0.1

* Added composer
* Added README
* Added CHANGELOG
