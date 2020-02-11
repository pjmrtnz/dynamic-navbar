# Dynamic Navigation Bar
Avoid applying navbar code in each of your web pages. With this dynamic navbar, you will be able to just call or `include` the navbar file in your specific page. Create a file named `navbar.php` and put these codes. Now in some of your pages, put `<?php include 'navbar.php' ?>`. And there's your dynamic navigation bar! Here's the guide :)

I recommend to put this code in your header. This line gets your last website's URL or it's filename. Try to echo it :)

`<?php $url = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>`

Now this is your nav. After you get the URL, compare its variable. If it doesn't match, it will leave your `<li>` inactive. It will not work if you try to match using `equal(=)`. You should use `not equal(!=)`.

`<li class="<?php if($url!='index.php'){ echo ""; }else{ echo "active"; } ?>"><a href="#"> HOME </a></li>`
