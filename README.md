[![Build Status](https://travis-ci.com/ulrack/storage.svg?branch=master)](https://travis-ci.com/ulrack/storage)

# Ulrack Storage

This package provides an interface and a simple implementation of a storage.
Storages are meant to be simple Data Access Objects (DAO's).
The implementation that is provided with this package stores data on the object.

## Installation

To install the package run the following command:

```
composer require ulrack/storage
```

## Usage

The [interface](src/Common/StorageInterface.php) provides a flexible contract for
applications. The StorageInterface could also be easily implemented with an
adapter for example, with a filesystem or a database.

The [provided implementation](src/Component/ObjectStorage.php) is a simple
object with a data variable containing all data. This could be used for storing
and sharing data between objects.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## MIT License

Copyright (c) 2019 GrizzIT

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
