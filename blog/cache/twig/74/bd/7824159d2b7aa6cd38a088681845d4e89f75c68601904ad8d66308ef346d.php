<?php

/* partials/postmeta.html.twig */
class __TwigTemplate_74bd7824159d2b7aa6cd38a088681845d4e89f75c68601904ad8d66308ef346d extends Twig_Template
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
        echo "<div class=\"post-meta\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 3
            echo "      <h1 class=\"post-title\"><i class=\"fa fa-angle-double-right\"></i> <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h1>
    ";
        } else {
            // line 5
            echo "      <h1 class=\"post-title\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h1>
    ";
        }
        // line 7
        echo "    ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()) == "post")) {
            // line 8
            echo "    <div class=\"cf post-meta-text\">
        <div class=\"author-image\" style=\"background-image: url(";
            // line 9
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
            echo ")\">Blog Logo</div>
        <h4 class=\"author-name\" itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\">";
            // line 10
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "</h4>
        on
        <time datetime=\"";
            // line 12
            echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
            echo "</time>
        ";
            // line 13
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) > 0)) {
                // line 14
                echo "        <span class=\"post-tags-set\">in ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    echo "<span class=\"post-tag-";
                    echo $context["tag"];
                    echo "\"><a href=\"";
                    echo $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "url", array());
                    echo "/tag";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo $context["tag"];
                    echo "\">";
                    echo $context["tag"];
                    echo "</a></span>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo " + ";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</span>
        ";
            }
            // line 16
            echo "    </div>
    <div style=\"text-align:center\">
        <a href=\"#topofpage\" class=\"topofpage\"><i class=\"fa fa-angle-down\"></i></a>
    </div>
    ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/postmeta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  108 => 16,  62 => 14,  60 => 13,  54 => 12,  49 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
