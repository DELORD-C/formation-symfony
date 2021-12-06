<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/number.html.twig */
class __TwigTemplate_ea51717d57cb1bd30936cbd4d80d5229a77922d89083705d2464e1fe14dc17e7 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/number.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/number.html.twig"));

        // line 1
        echo "<html>
    <body>
        ";
        // line 3
        if (twig_test_iterable((isset($context["return"]) || array_key_exists("return", $context) ? $context["return"] : (function () { throw new RuntimeError('Variable "return" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "            <ul>
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["return"]) || array_key_exists("return", $context) ? $context["return"] : (function () { throw new RuntimeError('Variable "return" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
                // line 6
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["number"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            </ul>
        ";
        } else {
            // line 10
            echo "            <p>";
            echo twig_escape_filter($this->env, (isset($context["return"]) || array_key_exists("return", $context) ? $context["return"] : (function () { throw new RuntimeError('Variable "return" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</p>
        ";
        }
        // line 12
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  69 => 10,  65 => 8,  56 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <body>
        {% if return is iterable %}
            <ul>
            {%  for number in return %}
                <li>{{ number }}</li>
            {% endfor %}
            </ul>
        {% else %}
            <p>{{ return }}</p>
        {%  endif %}
    </body>
</html>", "index/number.html.twig", "/home/zulgard/Projets/formation-symfony/templates/index/number.html.twig");
    }
}
