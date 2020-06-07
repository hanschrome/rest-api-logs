# REST API Logs

This API has been created to register logs on a database externally

# Installation

* git clone
* php composer.phar install

# Usage

To crete a new generic log:

POST /generic

Example json body:
```json
{
	"application": "hugyourartist",
	"level": 0,
	"environment": "dev",
	"scope": "API_PANEL",
	"filename": "index.php",
	"line": 10,
	"debugBackTrace": {},
	"session": "90j48gj398gj3948j0013j23j02f3",
	"client": "{UserAgent: Google Chrome}",
	"exception": "NoException",
	"error": "ERROR_TYPE",
	"message": "An error was thrown",
	"vars": {
		"var1": "value1",
		"var2": "value2"
	},
	"eventTrace": "[validated, error validation]",
	"observations": "Testing post request"
}
```
