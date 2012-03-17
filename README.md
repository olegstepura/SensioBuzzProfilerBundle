OstSensioBuzzProfilerBundle
~~~~~~~~~~~~~~~~~~~~~~~~~~~

Bundle to connect [sensio/buzz-bundle][1] with [juliendidier/buzz-profiler-bundle][2] to support prifiling default buzz client

Installation
------------

Clone the bundle:

``` bash
git clone
```

Install it with composer:

``` bash
curl -s http://getcomposer.org/installer | php
php composer.phar update
```

And enable the bundle in the kernel after `SensioBuzzBundle` before `BuzzProfilerBundle`:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
	$bundles = array(
		// ...
		new Sensio\Bundle\BuzzBundle\SensioBuzzBundle(),
		new Ost\SensioBuzzProfilerBundle\OstSensioBuzzProfilerBundle(),
		new Buzz\Bundle\ProfilerBundle\BuzzProfilerBundle(),
	);
}
```

[1] https://github.com/sensio/SensioBuzzBundle
[2] https://github.com/juliendidier/BuzzProfilerBundle
