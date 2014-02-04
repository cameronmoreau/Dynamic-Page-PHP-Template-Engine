Dynamic-Page-PHP-Template-Engine
================================

For dynamic PHP pages so that you can easily use HTML files rather than storing them in PHP variables

I created this for a competition website and I thought I would share it to the world

<h3>Example:</h3>

HTML Pages
<pre>
&lt;!-- Title --&gt;
Learn
&lt;!-- Content --&gt;
&lt;article>
	&lt;h2&gt;Intro&lt;/h2&gt;
	&lt;p>Hello World&lt;/p&gt;
&lt;/article&gt;
</pre>

This will parse that data into your Page Object like so
<pre>
&lt;h2&gt;&lt;?php $page->printTitle(); ?&gt;&lt;/h2&gt;
</pre>



