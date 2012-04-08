<?php
require_once dirname(__FILE__).'/../vendor/poor-test/poor-test.php';
require_once dirname(__FILE__).'/../curl-browser.php';

class TestCurlBrowser extends PoorTest {

  var $browser;
  var $website;

  function beforeAll() {
    $this->browser = new CurlBrowser;

    /* you'll need to change these lines to run tests on your environment */
    exec('ln -s curl-browser/test/website ~/Sites/website');
    $this->website = 'http://localhost/~thiagoalessio/website';
  }

  function afterAll() { exec('rm ~/Sites/website'); }

  function testGet() {
    $this->browser->get("$this->website/index.html");
    return strstr($this->browser->content, 'Welcome to my website!');
  }

  function testPost() {
    $this->browser->post("$this->website/form.php", array('foo' => 'bar'));
    return strstr($this->browser->content, 'Hello, BAR!');
  }

  function testCookies() {
    $this->browser->get("$this->website/page-with-cookies.php");
    return $this->browser->cookies['foo'] == 'bar';
  }

  function testDownload() {
    $file = sys_get_temp_dir().'/someFile.zip';
    $this->browser->download($this->website.'/download.zip', $file);
    $error = false;
    if(filesize($file) != 30094
    or md5_file($file) != '95a19c6e864c7996b9bb2d3c2f34051c') $error = true;
    unlink($file);
    return !$error;
  }
}
new TestCurlBrowser();
?>
