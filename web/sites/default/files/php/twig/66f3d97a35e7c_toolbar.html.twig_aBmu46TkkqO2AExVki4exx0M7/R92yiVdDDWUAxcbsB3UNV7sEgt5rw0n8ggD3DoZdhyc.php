<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/gin_toolbar/templates/toolbar.html.twig */
class __TwigTemplate_959dca0d5e412d61593dc84ec9fe0b44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        if (($context["core_navigation"] ?? null)) {
            // line 8
            yield "  ";
            if (($context["secondary_toolbar_frontend"] ?? null)) {
                // line 9
                yield "    ";
                $__internal_compile_0 = null;
                try {
                    $__internal_compile_0 =                     $this->loadTemplate("@gin/navigation/toolbar--gin--secondary.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 9);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_0) {
                    yield from $__internal_compile_0->unwrap()->yield($context);
                }
                // line 10
                yield "  ";
            }
        } else {
            // line 12
            yield "  ";
            $__internal_compile_1 = null;
            try {
                $__internal_compile_1 =                 $this->loadTemplate("@gin/navigation/toolbar--gin.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 12);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_1) {
                yield from $__internal_compile_1->unwrap()->yield($context);
            }
            // line 13
            yield "
  ";
            // line 14
            if ((($context["secondary_toolbar_frontend"] ?? null) && (($context["toolbar_variant"] ?? null) != "classic"))) {
                // line 15
                yield "    ";
                $__internal_compile_2 = null;
                try {
                    $__internal_compile_2 =                     $this->loadTemplate("@gin_toolbar/toolbar--gin--secondary--frontend.html.twig", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", 15);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_compile_2) {
                    yield from $__internal_compile_2->unwrap()->yield($context);
                }
                // line 16
                yield "  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["core_navigation", "secondary_toolbar_frontend", "toolbar_variant"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/gin_toolbar/templates/toolbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  87 => 16,  76 => 15,  74 => 14,  71 => 13,  60 => 12,  56 => 10,  45 => 9,  42 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", "/app/web/modules/contrib/gin_toolbar/templates/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "include" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
