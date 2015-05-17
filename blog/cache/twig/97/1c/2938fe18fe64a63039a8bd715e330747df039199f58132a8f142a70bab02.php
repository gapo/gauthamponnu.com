<?php

/* partials/pagination.html.twig */
class __TwigTemplate_971c2938fe18fe64a63039a8bd715e330747df039199f58132a8f142a70bab02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"pagination\" role=\"navigation\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
            // line 3
            echo "        <a class=\"older-posts\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array());
            echo "\">&larr; Older posts</a>
    ";
        }
        // line 5
        echo "    <span class=\"page-number\">Page ";
        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "currentPage", array());
        echo " of ";
        echo twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "</span>
    ";
        // line 6
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
            // line 7
            echo "        <a class=\"newer-posts\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array());
            echo "\">Newer posts &rarr;</a>
    ";
        }
        // line 9
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  41 => 7,  39 => 6,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
