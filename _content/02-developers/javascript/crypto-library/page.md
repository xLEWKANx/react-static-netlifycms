---
_fieldset: post
title: JavaScript Crypto Library
---
<div class="content">
{{ theme:partial src="developers-docs-top-wrapper" active-language="javascript" }}
{{ theme:partial src="developers-docs-navigation" active-language="javascript" active-doc-tab="crypto-library" }}

<section class="docs-content-wrapper">
<div class="container">
<div class="row">
<div class="col-md-48 col-lg-34 docs-content" data-ui="affix-docs-trigger">

<div markdown="1">
# JavaScript Crypto Library

- [Generate Keys](#generate-keys)
- [Encrypt and Decrypt data using password](#encrypt-and-decrypt-data-using-password)
- [Async (using web workers) Encrypt and Decrypt data using password](#async-using-web-workers-encrypt-and-decrypt-data-using-password)
- [Encrypt and Decrypt data using Key](#encrypt-and-decrypt-data-using-key)
  - [Encrypt and Decrypt data using Key with password](#encrypt-and-decrypt-data-using-key-with-password)
  - [Encrypt and Decrypt data using Key with password for multiple recipients](#encrypt-and-decrypt-data-using-key-with-password-for-multiple-recipients)
- [Async (using web workers) Encrypt and Decrypt data using Key with password](#async-using-web-workers-encrypt-and-decrypt-data-using-key-with-password)
- [Async (using web workers) Encrypt and Decrypt data using Key with password for multiple recipients](#async-using-web-workers-encrypt-and-decrypt-data-using-key-with-password-for-multiple-recipients)
  - [Encrypt and Decrypt data using Key without password](#encrypt-and-decrypt-data-using-key-without-password)
- [Async (using web workers) Encrypt and Decrypt data using Key without password](#async-using-web-workers-encrypt-and-decrypt-data-using-key-without-password)
- [Sign and Verify data using Key](#sign-and-verify-data-using-key)
  - [Sign and Verify data using Key with password](#sign-and-verify-data-using-key-with-password)
- [Async (using web workers) Sign and Verify data using Key with password](#async-using-web-workers-sign-and-verify-data-using-key-with-password)
  - [Sign and Verify data using Key without password](#sign-and-verify-data-using-key-without-password)
- [Async (using web workers) Sign and Verify data using Key without password](#async-using-web-workers-sign-and-verify-data-using-key-without-password)
  
## Generate Keys

```javascript
var VirgilSDK = window.VirgilSDK;

var virgilCrypto = new VirgilSDK.Crypto();

var keys = virgilCrypto.generateKeys();

console.log('Keys without password: ', keys);

var KEY_PASSWORD = 'password';
var keysWithPassword = virgilCrypto.generateKeys(KEY_PASSWORD);

console.log('Keys with password: ', keysWithPassword);
```

## Encrypt and Decrypt data using password

> Initial data must be passed in [Base64](https://en.wikipedia.org/wiki/Base64) format.

> Encrypted data also will be returned in [Base64](https://en.wikipedia.org/wiki/Base64) format.

```javascript
var VirgilSDK = window.VirgilSDK;

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var PASSWORD = 'password';

var virgilCrypto = new VirgilSDK.Crypto();
var encryptedData = virgilCrypto.encryptWithPassword(INITIAL_DATA_BASE64, PASSWORD);
var decryptedData = virgilCrypto.decryptWithPassword(encryptedData, PASSWORD);

console.log('Encrypted data: ' + encryptedData);
console.log('Decrypted data: ' + decryptedData);
```

## Async (using web workers) Encrypt and Decrypt data using password

```javascript
var VirgilSDK = window.VirgilSDK;

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var PASSWORD = 'password';

var virgilCrypto = new VirgilSDK.Crypto();

virgilCrypto.encryptWithPasswordAsync(INITIAL_DATA_BASE64, PASSWORD)
  .then(function(encryptedData) {
    console.log('Encrypted data: ' + encryptedData);

    virgilCrypto.decryptWithPassword(encryptedData, PASSWORD)
      .then(function(decryptedData) {
        console.log('Decrypted data: ' + decryptedData);
      });
  });
```

## Encrypt and Decrypt data using Key

> Initial data must be passed in [Base64](https://en.wikipedia.org/wiki/Base64) format.

> Encrypted data also will be returned in [Base64](https://en.wikipedia.org/wiki/Base64) format.

### Encrypt and Decrypt data using Key with password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var KEY_PASSWORD = 'password';

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();
var keys = virgilCrypto.generateKeys(KEY_PASSWORD);
var encryptedData = virgilCrypto.encryptWithKey(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey);
var decryptedData = virgilCrypto.decryptWithKey(encryptedData, RECIPIENT_ID, btoa(keys.privateKey), KEY_PASSWORD);

console.log('Encrypted data: ' + encryptedData);
console.log('Decrypted data: ' + decryptedData);
```

### Encrypt and Decrypt data using Key with password for multiple recipients

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var KEY_PASSWORD = 'password';

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();
var keys = virgilCrypto.generateKeys(KEY_PASSWORD);
var recipientsList = [{ recipientId: RECIPIENT_ID, publicKey: keys.publicKey }];
var encryptedData = virgilCrypto.encryptWithKeyMultiRecipients(INITIAL_DATA_BASE64, recipientsList);
var decryptedData = virgilCrypto.decryptWithKey(encryptedData, RECIPIENT_ID, btoa(keys.privateKey), KEY_PASSWORD);

console.log('Encrypted data: ' + encryptedData);
console.log('Decrypted data: ' + decryptedData);
```

## Async (using web workers) Encrypt and Decrypt data using Key with password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var KEY_PASSWORD = 'password';

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();

virgilCrypto.generateKeysAsync(KEY_PASSWORD)
  .then(function(keys) {
    virgilCrypto.encryptWithKeyAsync(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey)
      .then(function(encryptedData) {
        console.log('Encrypted data: ' + encryptedData);

        virgilCrypto.decryptWithKeyAsync(encryptedData, RECIPIENT_ID, btoa(keys.privateKey), KEY_PASSWORD)
          .then(function(decryptedData) {
            console.log('Decrypted data: ' + decryptedData);
          });
      });
  });
```

## Async (using web workers) Encrypt and Decrypt data using Key with password for multiple recipients

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var KEY_PASSWORD = 'password';

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();

virgilCrypto.generateKeysAsync(KEY_PASSWORD)
  .then(function(keys) {
    var recipientsList = [{ recipientId: RECIPIENT_ID, publicKey: keys.publicKey }];
    
    virgilCrypto.encryptWithKeyMultiRecipientsAsync(INITIAL_DATA_BASE64, recipientsList)
      .then(function(encryptedData) {
        console.log('Encrypted data: ' + encryptedData);

        virgilCrypto.decryptWithKeyAsync(encryptedData, RECIPIENT_ID, btoa(keys.privateKey), KEY_PASSWORD)
          .then(function(decryptedData) {
            console.log('Decrypted data: ' + decryptedData);
          });
      });
  });
```

### Encrypt and Decrypt data using Key without password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();
var keys = virgilCrypto.generateKeys();
var encryptedData = virgilCrypto.encryptWithKey(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey);
var decryptedData = virgilCrypto.decryptWithKey(encryptedData, RECIPIENT_ID, btoa(keys.privateKey));

console.log('Encrypted data: ' + encryptedData);
console.log('Decrypted data: ' + decryptedData);
```

## Async (using web workers) Encrypt and Decrypt data using Key without password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();

virgilCrypto.generateKeysAsync()
  .then(function(keys) {
    virgilCrypto.encryptWithKeyAsync(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey)
      .then(function(encryptedData) {
        console.log('Encrypted data: ' + encryptedData);

        virgilCrypto.decryptWithKeyAsync(encryptedData, RECIPIENT_ID, btoa(keys.privateKey))
          .then(function(decryptedData) {
            console.log('Decrypted data: ' + decryptedData);
          });
      });
  });
```

## Sign and Verify data using Key

> Initial data must be passed in [Base64](https://en.wikipedia.org/wiki/Base64) format.

> Encrypted data also will be returned in [Base64](https://en.wikipedia.org/wiki/Base64) format.

### Sign and Verify data using Key with password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var KEY_PASSWORD = 'password';
var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();
var keys = virgilCrypto.generateKeys(KEY_PASSWORD);
var encryptedData = virgilCrypto.encryptWithKey(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey);
var sign = virgilCrypto.sign(encryptedData, btoa(keys.privateKey), KEY_PASSWORD);
var isDataVerified = virgilCrypto.verify(encryptedData, keys.publicKey, sign);

console.log('Encrypted data: ' + encryptedData);
console.log('Sign: ' + sign);
console.log('Is data verified: ' + isDataVerified);
```

## Async (using web workers) Sign and Verify data using Key with password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var KEY_PASSWORD = 'password';
var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();

virgilCrypto.generateKeysAsync(KEY_PASSWORD)
  .then(function(keys) {
    virgilCrypto.encryptWithKeyAsync(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey)
      .then(function(encryptedData) {
        console.log('Encrypted data: ' + encryptedData);

        virgilCrypto.signAsync(encryptedData, btoa(keys.privateKey), KEY_PASSWORD)
          .then(function(sign) {
            console.log('Sign: ' + sign);

            virgilCrypto.verifyAsync(encryptedData, keys.publicKey, sign)
              .then(function(isDataVerified) {
                console.log('Is data verified: ' + isDataVerified);
              });
          });
      });
  });
```

### Sign and Verify data using Key without password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();
var keys = virgilCrypto.generateKeys();
var encryptedData = virgilCrypto.encryptWithKey(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey);
var sign = virgilCrypto.sign(encryptedData, btoa(keys.privateKey));
var isDataVerified = virgilCrypto.verify(encryptedData, keys.publicKey, sign);

console.log('Encrypted data: ' + encryptedData);
console.log('Sign: ' + sign);
console.log('Is data verified: ' + isDataVerified);
```

## Async (using web workers) Sign and Verify data using Key without password

```javascript
var VirgilSDK = window.VirgilSDK;

var utils = VirgilSDK.Utils;

var INITIAL_DATA = 'data to be encrypted';
var INITIAL_DATA_BASE64 = btoa(INITIAL_DATA);
var RECIPIENT_ID = utils.uuid();

var virgilCrypto = new VirgilSDK.Crypto();

virgilCrypto.generateKeysAsync()
  .then(function(keys) {
    virgilCrypto.encryptWithKey(INITIAL_DATA_BASE64, RECIPIENT_ID, keys.publicKey)
      .then(function(encryptedData) {
        console.log('Encrypted data: ' + encryptedData);
        
        virgilCrypto.sign(encryptedData, btoa(keys.privateKey))
          .then(function(sign) {
            console.log('Sign: ' + sign);
            
            virgilCrypto.verify(encryptedData, keys.publicKey, sign)
              .then(function(isDataVerified) {
                console.log('Is data verified: ' + isDataVerified);
              });
          });
      });
  });
```
</div>
</div>

<div class="col-md-12 col-md-offset-2 hidden-md hidden-xs hidden-sm">
<div class="docs-menu" data-ui="affix-docs">

<div class="menu-items-wrapper" data-ui="menu-items-wrapper"></div>
</div>
</div>
</div>
</div>
</section>
</div>