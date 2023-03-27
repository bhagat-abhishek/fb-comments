# FB Comments Package
This is a package for integrating Facebook comments to your Laravel application.

## Installation
To install the package, simply run:

```bash
composer require bhagat-abhishek/fb-comments
```

## Configuration
After installing the package, add the service provider to your config/app.php file:

```bash
'providers' => [
    // ...
    BhagatAbhishek\FbComments\FbCommentsServiceProvider::class,
],
```
Then publish the configuration file by running the following command:

```bash
php artisan vendor:publish --provider="BhagatAbhishek\FbComments\FbCommentsServiceProvider" --tag="config"
```

This will create a fb-comments.php file in your config directory. In this file, you can configure the Facebook App ID and Secret, as well as other options for the package.


```bash
php artisan vendor:publish --provider="BhagatAbhishek\FbComments\FbCommentsServiceProvider" --tag="fb-comments-views"
```

This will publish the views files.

Next, add the following code on top of your layouts/app.blade.php file, just after the opening <body> tag:

```bash
@include('fb-comments::fb-comments-script')
```
This will load the Facebook comments script on every page of your application.

Finally, wherever you want to render the comments, add the following code:

```bash
@include('fb-comments::fb-comments-code', ['url' => request()->url()])
```
This will render the Facebook comments for the current URL.

## Usage
Here's an example of how to use the package:
```bash
@include('fb-comments::fb-comments-code', ['url' => request()->url()])
```

## License
This package is open-sourced software licensed under the MIT license.

## Credits
This package was created by Bhagat Abhishek.