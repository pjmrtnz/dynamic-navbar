# Dynamic Navigation Bar
Avoid applying navbar code in each of your web pages. With this dynamic navbar, you will be able to just call or `include` the navbar file in your specific page. Here's the guide :)

I recommend to put this code in your header. This line gets your last website's URL or it's filename. Try to echo it :)

`<?php $url = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>`

Now this is your nav. After you get the URL, compare its variable. If it doesn't match, it will leave your `<li>` inactive. It will not work if you try to match using `equal(=)`. You should use `not equal(!=)`.

`<li class="<?php if($url!='index.php'){ echo ""; }else{ echo "active"; } ?>"><a href="index.php"> HOME </a></li>`
