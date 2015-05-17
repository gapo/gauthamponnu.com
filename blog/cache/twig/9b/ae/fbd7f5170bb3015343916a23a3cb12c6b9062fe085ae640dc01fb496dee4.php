<?php

/* partials/base.html.twig */
class __TwigTemplate_9baefbd7f5170bb3015343916a23a3cb12c6b9062fe085ae640dc01fb496dee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        } else {
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        }
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 11
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 19
            echo "    <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(), "method");
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i\">
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    ";
        // line 27
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/main.css"), "method");
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
</head>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $context["home"] = $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "home", array()), "alias", array())), "method");
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "
    <!-- content start -->

    ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "    <!-- content end -->


    ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->loadTemplate("partials/javascripts.html.twig", "partials/base.html.twig", 65)->display($context);
        // line 66
        echo "
</body>
</html>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "<body>
";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "        <a href=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\" class=\"logo-readium\"><span class=\"logo\" style=\"background-image: url(";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo ")\"></span></a>
    ";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "    <div class=\"page-content\">
        <div class=\"wrapper\">
            ";
        // line 46
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    ";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "    <!-- footer start -->
    <footer class=\"site-footer\">
      <a class=\"subscribe\" href=\"";
        // line 56
        echo $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "url", array());
        echo "/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> Subscribe!</span></a>
        <div class=\"inner\">
             <section class=\"copyright\">All content copyright <a href=\"mailto:";
        // line 58
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "email", array());
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array());
        echo "</a> &copy; ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " &bull; All rights reserved.</section>
             <section class=\"poweredby\">Made with <a href=\"http://getgrav.org\"> Grav</a></section>
        </div>
    </footer>
    <!-- footer end -->
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 58,  194 => 56,  190 => 54,  187 => 53,  179 => 46,  175 => 44,  172 => 43,  162 => 38,  159 => 37,  154 => 32,  151 => 31,  144 => 66,  142 => 65,  139 => 64,  137 => 53,  132 => 50,  130 => 43,  125 => 40,  123 => 37,  120 => 36,  118 => 35,  115 => 34,  113 => 31,  107 => 29,  105 => 28,  103 => 27,  96 => 23,  92 => 22,  89 => 21,  56 => 19,  52 => 18,  42 => 11,  34 => 10,  23 => 1,);
    }
}
