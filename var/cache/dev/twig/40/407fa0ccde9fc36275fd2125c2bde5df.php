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

/* list.html.twig */
class __TwigTemplate_a5eacaa36a1c6802d9b7435ce2a32f30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <h1>Posts List</h1>

    <ul style=\"list-style-type: none; padding: 0;\">
        ";
        // line 6
        if (array_key_exists("posts", $context)) {
            // line 7
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 8
                yield "                <li style=\"border: 2px solid #ccc; padding: 10px;\">
                <strong style=\"color: rgb(0, 149, 255);\">ID:</strong> ";
                // line 9
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 9), "html", null, true);
                yield "<br>
                <strong style=\"color: rgb(0, 149, 255);\">User:</strong> ";
                // line 10
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "username", [], "any", false, false, false, 10), "html", null, true);
                yield "<br>
                <strong style=\"color: rgb(0, 149, 255);\">Title:</strong> ";
                // line 11
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 11), "html", null, true);
                yield "<br>
                <strong style=\"color: rgb(0, 149, 255);\">Body:</strong> ";
                // line 12
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 12), "html", null, true);
                yield "<br>
                <button class=\"delete-post\" style=\"border-radius: 5px;\"data-post-id=\"";
                // line 13
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 13), "html", null, true);
                yield "\">Usuń</button>
            </li>
            <br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "    ";
        } else {
            // line 18
            yield "        <li>No posts found</li>
    ";
        }
        // line 20
        yield "    </ul>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-post');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const postId = this.getAttribute('data-post-id');
                    console.log(postId);
                    deletePost(postId);
                });
            });

            function deletePost(postId) {
                fetch(`/post/\${postId}`, {
                    method: 'DELETE',
                })
                .then(response => {
                        location.reload();
                })
                .catch(error => {
                    console.error('Wystąpił błąd podczas wysyłania żądania DELETE:', error);
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "list.html.twig";
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
        return array (  117 => 20,  113 => 18,  110 => 17,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  81 => 8,  76 => 7,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <h1>Posts List</h1>

    <ul style=\"list-style-type: none; padding: 0;\">
        {% if posts is defined %}
            {% for post in posts %}
                <li style=\"border: 2px solid #ccc; padding: 10px;\">
                <strong style=\"color: rgb(0, 149, 255);\">ID:</strong> {{ post.id }}<br>
                <strong style=\"color: rgb(0, 149, 255);\">User:</strong> {{ post.username }}<br>
                <strong style=\"color: rgb(0, 149, 255);\">Title:</strong> {{ post.title }}<br>
                <strong style=\"color: rgb(0, 149, 255);\">Body:</strong> {{ post.body }}<br>
                <button class=\"delete-post\" style=\"border-radius: 5px;\"data-post-id=\"{{ post.id }}\">Usuń</button>
            </li>
            <br>
        {% endfor %}
    {% else %}
        <li>No posts found</li>
    {% endif %}
    </ul>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-post');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const postId = this.getAttribute('data-post-id');
                    console.log(postId);
                    deletePost(postId);
                });
            });

            function deletePost(postId) {
                fetch(`/post/\${postId}`, {
                    method: 'DELETE',
                })
                .then(response => {
                        location.reload();
                })
                .catch(error => {
                    console.error('Wystąpił błąd podczas wysyłania żądania DELETE:', error);
                });
            }
        });
    </script>
{% endblock %}
", "list.html.twig", "/app/templates/list.html.twig");
    }
}
