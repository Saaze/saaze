![Saaze](https://user-images.githubusercontent.com/203882/94196018-b0f60f80-feab-11ea-90c3-05f61d19cb57.png)

# Saaze

Saaze is an all-inclusive, flat-file CMS for simple websites and blogs.

WordPress is a great CMS but it can become bloated and a maintenance nightmare for a simple sites. Static site builders are fast but normally have a steep learning curve and require lots of tooling to make them work. Building a personal site should be stupidly simple. That's why Saaze is:

* Easy to run - All you need is PHP and Composer
* Easy to host - Serve dynamically or statically
* Easy to edit - Edit content using simple Markdown files
* Easy to theme - Templates use Blade (and optionally PHP)
* Fast and secure - No database = less moving parts + more speed
* Simple to understand - Everything is a collection of entries
* All-inclusive - CLI for easily serving and building your site

## Requirements

* PHP 7+

## Installation

To install Saaze, use Composer to create a project:

```
composer create-project saaze/saaze {site} --prefer-dist --stability=dev
```

When you need to update Saaze in the future, use Composer to update the `saaze/core` package:

```
composer update saaze/core --with-dependencies
```

## Quick Start

To get started developing your Saaze site, use the Saaze CLI `serve` command:

```
./sazze serve
```

This will run a local development server at [http://127.0.0.1:8000](http://127.0.0.1:8000) (the port can be changed using the `-p` flag).

### Hosting

There are two ways to host a Saaze site:

1. Dynamic: Serve the site as a normal PHP site using the `./public` directory
1. Static: Build and serve the site as a static site

To build the static version of your site, use the Saaze CLI `build` command:

```
./saaze build
```

This command creates a complete static build of your site in the `build` directory (the destination directory can be changed using the `-d` flag).

## Credits

Saaze was created by [Gilbert Pellegrom](https://gilbitron.me) from [Dev7studios](https://dev7studios.co). Released under the MIT license.
