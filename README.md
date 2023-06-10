## INTRO

This is a simple command line tool for testing https://github.com/brainfoolong/cryptojs-aes-php .

## INSTALLATION

This tool assumes php 7+ and [a working composer install](https://getcomposer.org/). To Install:

```
$ composer install
```

## USAGE

To encrypt `{"key":"value"}` with passphrase `hunter2`

```
$ composer encrypt hunter2 '{"key":"value"}'
> Hypervolt\CryptoTest::encrypt
> {"ct":"ja\/foooQs5nQBzzAHuo4Fw==","iv":"0eb91991bc836d206e268fc266f3cbc9","s":"6394860e66f57098"}
```

To decrypt this same value

```
$ composer decrypt hunter2 '{"ct":"ja\\/foooQs5nQBzzAHuo4Fw==","iv":"0eb91991bc836d206e268fc266f3cbc9","s":"6394860e66f57098"}'
> Hypervolt\CryptoTest::decrypt
> {"key":"value"}
```
