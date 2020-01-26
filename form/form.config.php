<?php namespace JF;
/**

Copyright 2020 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-d5a8de
Date:    2020-01-24 21:27:23
Version: v3.0.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-d5a8de",
    "email": {
        "to": "rep.bandsng@gmail.com",
        "cc": "",
        "bcc": "",
        "subject": "Delivery submission",
        "template": "",
        "sendmail_from": "rep.bandsng@gmail.com"
    },
    "admin": {
        "users": "admin:Omodial01, fasterlinks:Omodial01",
        "dataDelivery": "emailAndFile",
        "save2dbExample": false
    },
    "thankyou": {
        "url": "http:\/\/fasterlinks.net\/thankyou.html",
        "message": "Your order has been sent. we will process it as soon as possible.Thank You!",
        "seconds": "7"
    },
    "autoResponse": {
        "includeAttachments": true,
        "subject": "Fasterlinks Delivery Order",
        "template": "Dear {sender.fullname},\n\nThank you for filling out the form. Here is the copy of your data:\n{dataTable}\n\nWe will contact you shortly.\n\nBest Regards,\n{HTTP_HOST}\n\n\nReference ID: {AutoID}\nYour IP: {IP}\nDate: {Date}\nTime: {Time}\n\nPlease keep this email for reference and always use your ID when contacting support.\n\nFasteerinks.net | All right reserve\n"
    },
    "seo": {
        "trackerId": "A-78798098",
        "title": "Fasterlinks Delivery Service",
        "description": "Send packages faster anywhere in Nigeria",
        "keywords": "Send stuffs faster, buy online, new gadgets, new inovation ",
        "author": "Bandsnng"
    },
    "mailer": "smtp",
    "smtp": {
        "host": "smtp.gmail.com",
        "user": "rep.bandsng@gmail.com",
        "password": "Omodial01",
        "port": "465",
        "security": "ssl"
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [],
    "fields": [
        {
            "label": "Page Navigation",
            "field_type": "page_navigation",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "navigation": {
                    "style": "steps",
                    "showNumber": true,
                    "isButtonPrev": true,
                    "titles": [
                        {
                            "id": "f13",
                            "title": "Select Your Oder"
                        },
                        {
                            "id": "f15",
                            "title": "Delivery details"
                        },
                        {
                            "id": "f0",
                            "title": "Place Oder"
                        }
                    ]
                }
            },
            "id": "f14",
            "cid": "c67"
        },
        {
            "label": "Select your order",
            "field_type": "checkboxes",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false,
                    "responsive": true
                },
                "options": [
                    {
                        "label": "Digital Therapy Kit",
                        "checked": false,
                        "image": "\/images\/dtm4.jpg",
                        "value": ""
                    },
                    {
                        "label": "3 in 1 Grater",
                        "checked": false,
                        "image": "\/images\/3in1grater.jpg"
                    },
                    {
                        "label": "12 in 1 nicerdicer",
                        "checked": false,
                        "image": "\/images\/nicerdicer.jpg"
                    },
                    {
                        "label": "Electric-Grinder",
                        "checked": false,
                        "image": "\/images\/Electric%20Grinder.png"
                    }
                ],
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)"
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)"
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "style": {
                    "columns": "col-2"
                },
                "mainDescription": ""
            },
            "id": "f4",
            "cid": "c25"
        },
        {
            "label": "Quatity",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "1",
                        "checked": false
                    },
                    {
                        "label": "2",
                        "checked": false
                    },
                    {
                        "label": "3",
                        "checked": false
                    },
                    {
                        "label": "4",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "5",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "6",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "7",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "8",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "9",
                        "value": null,
                        "checked": false
                    },
                    {
                        "label": "10",
                        "value": null,
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    }
                },
                "presetJson": "",
                "multiple": false,
                "addon": {
                    "leftIcon": "glyphicon glyphicon-option-vertical"
                }
            },
            "id": "f16",
            "cid": "c49"
        },
        {
            "label": "Select Your Oder",
            "field_type": "page_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "page": {
                    "title": "Select Your Oder",
                    "labelPrev": "< Back",
                    "labelNext": "Next",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}",
                    "disabled": false
                }
            },
            "id": "f13",
            "cid": "c62"
        },
        {
            "label": "Your Name",
            "field_type": "name",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": "fullname",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "Full Name"
            },
            "id": "f6",
            "cid": "c38"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                },
                "placeholder": "Email address"
            },
            "id": "f2",
            "cid": "c2"
        },
        {
            "label": "Phone",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "phone number",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9 -+.]+",
                        "msg": "Invalid phone number"
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f8",
            "cid": "c48"
        },
        {
            "label": "Delivery details",
            "field_type": "page_break",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "page": {
                    "title": "Delivery details",
                    "labelPrev": "< Back",
                    "labelNext": "Next",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}",
                    "disabled": false
                }
            },
            "cid": "c74",
            "id": "f15"
        },
        {
            "label": "Address",
            "field_type": "address",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "labelHide": false,
            "gMapApiKey": "",
            "gaCompleteEnabled": true,
            "gaCountryRestrictions": "",
            "gaPostalCodeRestrictions": "",
            "gaLanguage": "",
            "showLabel": false,
            "showPlaceholder": true,
            "showDescription": true,
            "subfields": {
                "addressLine1": {
                    "order": 1,
                    "label": "Address",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "street_number route",
                        "gAddressName": "long_name",
                        "placeholder": "123 Main St. Mitama",
                        "description": "Where you want your product(s) deliver to(house,office)",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "addressLine2": {
                    "order": 2,
                    "label": "Address Line2",
                    "field_options": {
                        "enabled": false,
                        "placeholder": "Unit 1234",
                        "description": "Apartment, suite, unit, building, floor, etc.",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": ""
                            }
                        }
                    }
                },
                "city": {
                    "order": 3,
                    "label": "City",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "locality",
                        "gAddressName": "long_name",
                        "placeholder": "City",
                        "description": "Your city or town",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "state": {
                    "order": 4,
                    "label": "State",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "administrative_area_level_1",
                        "gAddressName": "long_name",
                        "placeholder": "State",
                        "description": "Your state",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "postalCode": {
                    "order": 5,
                    "label": "Postal \/ Zip Code",
                    "field_options": {
                        "enabled": false,
                        "gAddressTypes": "postal_code",
                        "gAddressName": "long_name",
                        "placeholder": "Postal \/ Zip Code",
                        "description": "Postal \/ Zip Code",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "country": {
                    "order": 6,
                    "label": "Country",
                    "field_options": {
                        "enabled": false,
                        "gAddressTypes": "country",
                        "gAddressName": "long_name",
                        "placeholder": "Country",
                        "description": "Country",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": "This field is required."
                            }
                        }
                    }
                }
            },
            "id": "f11",
            "cid": "c63"
        },
        {
            "label": "Google reCaptcha",
            "field_type": "recaptcha",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                }
            },
            "labelHide": true,
            "recaptcha": {
                "theme": "light",
                "siteKey": "",
                "secretKey": "",
                "language": "",
                "errMsg": "Google reCaptcha validation error. Please try again.",
                "maxFailed": 3
            },
            "id": "f12",
            "cid": "c57"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Place Oder",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "Place Order Now",
                "icon": "glyphicon glyphicon-arrow-right",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "gdpr": {
        "consentFieldId": "",
        "saveData": "always"
    },
    "licenseKey": ""
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class