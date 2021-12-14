# Encryption and Hashing example
This example shows how to hash data and how to encrypt data with built in PHP functions.
## Hashing
This example shows how to hash by using various techniques namely:
- MD5
- SHA1
- Bcrypt
- Argon2I

_**A big disclaimer**_: MD5 and SHA1 are not safe for password hashing! Use Bcrypt or Argon2I for this in combination with the `password_hash()` and `password_verify()` functions. 

## Encryption
This example shows how to encrypt and decrypt via a symmetrical key cipher. For this example the cipher `aes-256-ctr` is used, but this can be changed to something else if desired.
