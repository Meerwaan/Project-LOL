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

/* liste_des_champions/liste.html.twig */
class __TwigTemplate_1be824ca3d502b80c100ceba71392f2b955382fb6ecdd11826423bf18dfcad82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_des_champions/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_des_champions/liste.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Liste des Champions:</title>

</head>
<body>
<h1>Liste des Champions:</h1>
<div class=\"conteneur\">

    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champions"]) || array_key_exists("champions", $context) ? $context["champions"] : (function () { throw new RuntimeError('Variable "champions" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["champion"]) {
            // line 13
            echo "
        <div class=\"cards\">
            <a><button>Favoris</button></a>
            <h2 class=\"title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["champion"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
            <img src=";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["champion"], "image", [], "any", false, false, false, 17), "html", null, true);
            echo ">
            <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["champion"], "description", [], "any", false, false, false, 18), 0, 20), "html", null, true);
            echo "...</p>
            <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["champion"], "style", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
            <a href=\"/champions/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["champion"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\" ><button class=\"button\">Voir Plus</button></a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>

</body>
</html>




<style>

    .cards
    {
        width:200px;
        height: 400px;
        border: solid;
        display: flex;
        flex-direction: column;
        margin-top: 50px;
        margin-left: 50px;
        background-color: #f6f6f6;
        background-image: linear-gradient(315deg, #f6f6f6 0%, #e9e9e9 74%);
        transition: 0.3s;

        box-shadow: 12px 11px 15px 5px rgba(0,0,0,0.46);

    }

    .cards:hover{
        width:205px;
        height: 405px;
    }
    img
    {
        width: 200px;
        height: 120px;
    }
    .title
    {

        align-self: center;

    }

    .conteneur
    {

        display: flex;
    }

    .button
    {
        width: 100%;
        height:50px;
        background-color: #010913;
        border: none;
        color:grey;

    }

    a
    {
        width: 100%;
        height: 50px;
    }


</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "liste_des_champions/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Liste des Champions:</title>

</head>
<body>
<h1>Liste des Champions:</h1>
<div class=\"conteneur\">

    {% for champion in champions %}

        <div class=\"cards\">
            <a><button>Favoris</button></a>
            <h2 class=\"title\">{{ champion.name }}</h2>
            <img src={{ champion.image }}>
            <p>{{ champion.description|slice(0,20) }}...</p>
            <p>{{ champion.style }}</p>
            <a href=\"/champions/{{ champion.name }}\" ><button class=\"button\">Voir Plus</button></a>
        </div>
    {% endfor %}
</div>

</body>
</html>




<style>

    .cards
    {
        width:200px;
        height: 400px;
        border: solid;
        display: flex;
        flex-direction: column;
        margin-top: 50px;
        margin-left: 50px;
        background-color: #f6f6f6;
        background-image: linear-gradient(315deg, #f6f6f6 0%, #e9e9e9 74%);
        transition: 0.3s;

        box-shadow: 12px 11px 15px 5px rgba(0,0,0,0.46);

    }

    .cards:hover{
        width:205px;
        height: 405px;
    }
    img
    {
        width: 200px;
        height: 120px;
    }
    .title
    {

        align-self: center;

    }

    .conteneur
    {

        display: flex;
    }

    .button
    {
        width: 100%;
        height:50px;
        background-color: #010913;
        border: none;
        color:grey;

    }

    a
    {
        width: 100%;
        height: 50px;
    }


</style>", "liste_des_champions/liste.html.twig", "/Users/alban/Documents/projet/Project-LOL/templates/liste_des_champions/liste.html.twig");
    }
}
