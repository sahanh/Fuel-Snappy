# Fuel Snappy
Fuel snappy is a wrapper package for the awesome snappy library. 

## Snappy

Snappy is a PHP5 library allowing thumbnail, snapshot or PDF generation from a url or a html page.  
It uses the excellent webkit-based [wkhtmltopdf and wkhtmltoimage](http://code.google.com/p/wkhtmltopdf/)
available on OSX, linux, windows.

You will have to download wkhtmltopdf 0.10.0 >= rc2 in order to use Snappy.

## Usage
Copy the config file from package's  config folder to your app's config folder. Add the path to the wkthtmltopdf binary.

```php
<?php

$pdf = Pdf::forge();
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="file.pdf"');
echo $snappy->getOutput('http://www.fuelphp.com');

```

## Credits

Snappy has been originally developed by the [KnpLabs](http://knplabs.com) team.