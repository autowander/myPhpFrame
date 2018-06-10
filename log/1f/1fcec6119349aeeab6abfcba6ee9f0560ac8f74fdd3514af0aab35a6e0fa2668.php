<?php

/* index.html */
class __TwigTemplate_4d1d1b564965511fc2d5528b813e8dc588925ad262fd9b8853cb2810ccdb641f extends Twig_Template
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
    <p>";
        // line 11
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>mpf</title>
</head>
<body>
    <h1>视图文件</h1>
    <p>{{data}}</p>
</body>
</html>", "index.html", "D:\\xampp\\htdocs\\myPhpFrame\\app\\view\\index.html");
    }
}
