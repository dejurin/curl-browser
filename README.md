# cURL Browser

  Some shortcuts to make browsing easier on PHP.

## Instalation

  Just clone and put somewhere inside your project folder.

    $ cd myapp/vendor
    $ git clone git://github.com/thiagoalessio/curl-browser.git

## Usage

    <?php
    require_once dirname(__FILE__).'/../vendor/curl-browser/curl-browser.php';
    
    $browser = new CurlBrowser;
    
    // Visit websites
    $browser->get('http://www.example.com/index.php');
    preg_match("/some desired data inside page/", $browser->content);
    
    // Send forms
    $postData = array(
      'firstField'  => 'foo',
      'secondField' => 'bar'
    );
    $browser->post('http://www.example.com/form.php', $postData);
    
    // Download a file
    $browser->download('http://www.example.com/file.zip', 'files/example.zip');
    
    // Get cookie info
    echo $browser->cookie['jsessionid'];
    ?>
