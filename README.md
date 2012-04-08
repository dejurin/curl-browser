# cURL Browser

  Some shortcuts to make browsing easier on PHP.

## Instalation

  Just clone and put somewhere inside your project folder.

    $ cd myapp/vendor
    $ git clone git://github.com/thiagoalessio/curl-browser.git

## Usage

  Create an instance of `CurlBrowser` and have fun!

    require_once dirname(__FILE__).'/../vendor/curl-browser/curl-browser.php';
    $browser = new CurlBrowser;

  Visit websites

    $browser->get('http://www.example.com/index.php');
    preg_match("/some desired data inside page/", $browser->content);

  Send forms

    $postData = array(
      'firstField'  => 'foo',
      'secondField' => 'bar'
    );
    $browser->post('http://www.example.com/form.php', $postData);

  Download files

    $browser->download('http://www.example.com/file.zip', 'files/example.zip');

  Get cookies data

    echo $browser->cookies['jsessionid'];

## If you need more control

  You can set any curl option:

    $browser->options['useragent'] = "MyPHPScript/4.0";
    $browser->options['ssl_verifypeer'] = 1;
    // just set the options you want without the prefix "CURLOPT_"

  To get a list with all available options, visit:
  [http://www.php.net/manual/en/function.curl-setopt.php](http://www.php.net/manual/en/function.curl-setopt.php)
