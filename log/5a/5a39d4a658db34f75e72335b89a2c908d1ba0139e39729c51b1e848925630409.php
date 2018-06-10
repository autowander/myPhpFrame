<?php

/* index.html */
class __TwigTemplate_2ed1363c0034b90cbd7787884c1e1733f4a2971e8fa4c638668f75ecfb19eabc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>mpf</title>
</head>
<body>
    <h1>视图文件</h1>
    <p><?php echo \$data;?></p>
    <p><?php echo \$data1;?></p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "D:\\xampp\\htdocs\\myPhpFrame\\app\\view\\index.html");
    }
}
