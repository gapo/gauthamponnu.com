<?php

/* post.html.twig */
class __TwigTemplate_e42ad55da530362ff863324da803dadbc0beaf333aff8b8993921baf5b896590 extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1334835233")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* post.html.twig */
class __TwigTemplate_e42ad55da530362ff863324da803dadbc0beaf333aff8b8993921baf5b896590_1334835233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body itemscope itemtype=\"http://schema.org/Article\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <main class=\"content ";
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) ? ("tag-articleimage") : (""));
        echo "\" role=\"main\">
      <article class=\"post\">
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            // line 11
            echo "        <div class=\"article-image\">
          <div class=\"post-image-image\" style=\"background-image: url(";
            // line 12
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "url", array());
            }
            echo ")\">
            Article Image
          </div>
          ";
            // line 15
            $this->loadTemplate("partials/postmeta.html.twig", "post.html.twig", 15)->display($context);
            // line 16
            echo "        </div>
        ";
        } else {
            // line 18
            echo "        <div class=\"noarticleimage\">
          ";
            // line 19
            $this->loadTemplate("partials/postmeta.html.twig", "post.html.twig", 19)->display($context);
            // line 20
            echo "        </div>
        <br>
        <br>
        <br>
        ";
        }
        // line 25
        echo "        <section class=\"post-content\">
          ";
        // line 26
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()) == "post")) {
            // line 27
            echo "          <div class=\"post-reading\">
            <span class=\"post-reading-time\"></span> read
          </div>
          ";
        }
        // line 31
        echo "          <a name=\"topofpage\"></a>
          ";
        // line 32
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </section>

        ";
        // line 35
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()) == "post")) {
            // line 36
            echo "        <footer class=\"post-footer\">
          <section class=\"share\">
            ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 39
                echo "              ";
                if (($this->getAttribute($context["social"], "share_url", array()) != null)) {
                    // line 40
                    echo "                <a class=\"icon-";
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["social"], "share_url", array());
                    echo $this->getAttribute($context["social"], "share_title", array());
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()));
                    echo $this->getAttribute($context["social"], "share_link", array());
                    echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
                    echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array());
                    echo "\"
                  onclick=\"window.open(this.href, '";
                    // line 41
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "-share', 'width=550,height=255');return false;\">
                <i class=\"fa fa-";
                    // line 42
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "\"></i><span class=\"hidden\">";
                    echo $this->getAttribute($context["social"], "icon", array());
                    echo "</span>
                </a>
              ";
                }
                // line 45
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          </section>
        </footer>
        <div class=\"bottom-teaser cf\">
          <div class=\"isLeft\">
            <h5 class=\"index-headline featured\"><span>Written by</span></h5>
            <section class=\"author\">
              <div class=\"author-image\" style=\"background-image: url(";
            // line 52
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "image", array());
            echo ")\">Blog Logo</div>
              <h4>";
            // line 53
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "</h4>
              <p class=\"bio\">";
            // line 54
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "bio", array());
            echo "</p>
              <hr>
              <p class=\"published\">Published <time datetime=\"";
            // line 56
            echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_short", array()));
            echo "</time></p>
            </section>
          </div>
          ";
            // line 60
            echo "          <div class=\"isRight\">
            <h5 class=\"index-headline featured\"><span>Supported by</span></h5>
            <footer class=\"site-footer\">
              <section class=\"poweredby\">Proudly published with <a href=\"http://getgrav.org\"> Grav</a></section>
              <a class=\"subscribe\" href=\"";
            // line 64
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/blog.rss\"> <span class=\"tooltip\"> <i class=\"fa fa-rss\"></i> You should subscribe to my feed.</span></a>
              <div class=\"inner\">
                <section class=\"copyright\">All content copyright <a href=\"";
            // line 66
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array());
            echo "</a> &copy; ";
            echo twig_date_format_filter($this->env, "now", "Y");
            echo "<br>All rights reserved.</section>
              </div>
            </footer>
          </div>
        </div>
        ";
        }
        // line 72
        echo "
      </article>
    </main>
    <div class=\"bottom-closer\">
      <div class=\"background-closer-image\" ";
        // line 76
        if ($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "header", array()), "cover", array())) {
            echo " style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "header", array()), "cover", array()), array(), "array"), "brightness", array(0 =>  -75), "method"), "url", array());
            echo ")\"";
        }
        echo ">
        Image
      </div>
      <div class=\"inner\">
        <h1 class=\"blog-title\">";
        // line 80
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</h1>
        <h2 class=\"blog-description\">";
        // line 81
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "</h2>
        <a href=\"";
        // line 82
        echo $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "url", array());
        echo "\" class=\"btn\">Back to Overview</a>
      </div>
    </div>
";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 87,  250 => 82,  246 => 81,  242 => 80,  231 => 76,  225 => 72,  212 => 66,  207 => 64,  201 => 60,  193 => 56,  188 => 54,  184 => 53,  179 => 52,  171 => 46,  165 => 45,  157 => 42,  153 => 41,  141 => 40,  138 => 39,  134 => 38,  130 => 36,  128 => 35,  122 => 32,  119 => 31,  113 => 27,  111 => 26,  108 => 25,  101 => 20,  99 => 19,  96 => 18,  92 => 16,  90 => 15,  82 => 12,  79 => 11,  77 => 10,  71 => 8,  68 => 7,  63 => 4,  60 => 3,  19 => 1,);
    }
}
