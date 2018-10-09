# RebelCode - Entity Manager Interface

[![Build Status](https://travis-ci.org/rebelcode/entity-manager-interface.svg?branch=develop)](https://travis-ci.org/rebelcode/entity-manager-interface)
[![Code Climate](https://codeclimate.com/github/RebelCode/entity-manager-interface/badges/gpa.svg)](https://codeclimate.com/github/RebelCode/entity-manager-interface)
[![Test Coverage](https://codeclimate.com/github/RebelCode/entity-manager-interface/badges/coverage.svg)](https://codeclimate.com/github/RebelCode/entity-manager-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/rebelcode/entity-manager-interface/version)](https://packagist.org/packages/rebelcode/entity-manager-interface)

An interface package for standardizing entity managers.

## Introduction

This package provides a set of interfaces for objects (referred to as entity managers) that can manage entities.

The interfaces are designed to mimic collections in order to make them as compatible as possible with other collection implements. In fact,
some of the interfaces and methods in this package are inherited from [`dhii/collections-interface`]. This is to allow entity managers to
be able to work with both fixed and temporary forms of entities, such as database records, temporary computation results or configuration. 

We use these internally to conceal our usage of CQRS resource model abstraction (see [`dhii/cqrs-resource-model-interface`]).  
By implementing these interfaces, we are able to make consumers agnostic of this database abstraction and instead communicate with entity
manager instances for read/write operations.

## Requirements

* PHP 5.3.9 or later

## Installation

**With composer** _(Recommended)_

```
composer require rebelcode/entity-manager-interface
```

**Custom Autoloader**

Download the source code and refer to the vendor of your autoloader implementation for how to add an autoload rule.

All interfaces in this package exist under the `RebelCode\Entity` namespace and are located within the `src` directory, with no exceptions.

**Without composer**

Download the source code and `require` or `include` the required files in your code.

Each interface is stored in its own identically-named file without any consequential code being invoked, which means the files are 100% safe for inclusion.

[`dhii/collections-interface`]: https://github.com/Dhii/collections-interface
[`dhii/cqrs-resource-model-interface`]: https://github.com/Dhii/cqrs-resource-model-interface
