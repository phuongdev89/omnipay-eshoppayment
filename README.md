Omnipay for Eshoppayment
====================
Omnipay for Eshoppayment

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist phuongdev89/omnipay-eshoppayment "*"
```

or add

```
"phuongdev89/omnipay-eshoppayment": "*"
```

to the require section of your `composer.json` file.


Usage
-----

The following gateways are provided by this package:

* Eshoppayment

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Example

### Create payment url

```php
use Omnipay\Common\CreditCard;
use Omnipay\Eshoppayment\Gateway;
use Omnipay\Omnipay;

$command = Omnipay::create(Gateway::NAME);
$command->initialize([
    'userNo'    => '11131553',
    'paySecret' => 'ffu6uu91888843660123x544oo6ccbwx',
]);
$card     = new CreditCard([
    'firstName'   => 'Alexa',
    'lastName'    => 'Smith',
    'number'      => '4200000000000000',
    'cvv'         => '000',
    'expiryMonth' => '09',
    'expiryYear'  => '23',
    'state'       => 'Hanoi',
    'postcode'    => '100000',
    'address1'    => 'No 1208 CT 4-5 Yen Hoa',
    'city'        => 'Cau Giay',
    'country'     => 'VN', //ansi country code
]);
$response = $command->purchase([
    'card'        => $card,
    'currency'    => 'USD',
    'email'       => 'test@gmail.com',
    'language'    => 'en',
    'merOrderNo'  => 1,//unique id of order
    'amount'      => 10,
    'productInfo' => 'Test 10 do',
    'requestUrl'  => 'http://google.com',
    'ip'          => '0.0.0.0', //Your client real ip address
])->send();
echo '<pre>';
print_r($response->getData());
die;
```
