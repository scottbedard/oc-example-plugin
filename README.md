# oc-example-plugin

[![Build](https://img.shields.io/circleci/build/github/scottbedard/oc-example-plugin)](https://circleci.com/gh/scottbedard/oc-example-plugin)
[![Coverage](https://img.shields.io/codecov/c/github/scottbedard/oc-example-plugin)](https://codecov.io/gh/scottbedard/oc-example-plugin)
[![License](https://img.shields.io/github/license/scottbedard/oc-example-plugin?color=blue)](https://github.com/scottbedard/oc-example-plugin/blob/master/LICENSE)

### Overview

October ships with [many helpful artisan commands](https://octobercms.com/docs/console/commands), including one to scaffold new plugins. While this command is useful, it leaves a few things undone. Most notably, it does not scaffold a unit testing environment. That means setting up PHPUnit and the adjacent tooling is up to you. This plugin aims to provide an opinionated starting point for some of these common tasks.

### Getting Started

1. Clone this repository to the plugins directory.
   - `git clone git@github.com:scottbedard/oc-example-plugin.git ./plugins/author/plugin`

2. Make the following **case sensitive** text replacements.
   - `bedard.example` → `author.plugin`
   - `bedard/example` → `author/plugin`
   - `Bedard\Example` → `Author\Plugin`

3. Configure or remove [Circle CI](https://circleci.com) integration.

4. Configure or remove [Codecov](https://codecov.io) integration.

5. Update or remove the license file.

### License

[MIT](https://github.com/scottbedard/oc-example-plugin/blob/master/LICENSE)

Copyright (c) 2020-present, Scott Bedard
